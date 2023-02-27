$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back: Step',
            next : 'Next: Download',
            current : ''
        },
    });
    var table = $('#statistics').DataTable( {
        responsive: true
    } );
    var timeout;
    $( "#request_domainName" ).keyup(function() {
        if(timeout) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(()=>{validateDomainName()},1000);
    });

    $("#survey-submit-btn").on('click', function(){
        var csrf = document.querySelector('meta[name="csrf-token"]').content;
        var checked = $("input[name=rate]:checked").val();
        var wallet_address = $('#wallet_address').val();
        var domainName = $('#request_domainName').val();
        var twitterUserName = $('#twitterUserName').val().replace(/@/g, '');
        if(checked){
            $.post("/finalization",
            {
                _token: csrf,
                walletAddress : wallet_address,
                domainName: domainName,
                twitterUserName: twitterUserName,
                survey: checked,
            }).done(function(data){
                if(data.status){
                    swal("CONFIRMATION CODE: "+data.payload, "Please save this code in a safe area for some later use.");  
                }else{
                    swal("Oop!", data.payload);  
                }
            }).fail(function(err){
                swal("Oops!", err.responseJSON.message);  
            });
        }else{
            swal("Oops!", "Please select one option!");  
        }
    })

});
function validateDomainName(){
    var domainName = $('#request_domainName').val();
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    if(domainName == ""){
        $("#validateText").html("<label class='name-status-error'>Please Input Name</label>");
        $("#namestatus").html("");
    }else{
        $.post("/findDomainName",
        {
            _token: csrf,
            name : domainName,
        }).done(function(data){
            if(data.status){
                if(data.payload.result) {
                    $("#validateText").html("<label class='name-status-error'>Sorry! This name is already registered.</label>");
                    activeCrossElement();
                }else if(data.payload.error){
                    if(data.payload.error.message=='Name purportedly never existed' || data.payload.error.message.includes('Name is purportedly expired')){
                        $("#validateText").html("<label class='name-status-success'>This name is available.</label>");
                        $("#namestatus").html(
                        "<div class='wrapper'>"+
                            "<svg class='checkmark' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 52 52'>"+
                                "<circle class='checkmark__circle' cx='26' cy='26' r='25' fill='none' />"+
                                "<path class='checkmark__check' fill='none' d='M14.1 27.2l7.1 7.2 16.7-16.8' />"+
                            "</svg>"+
                        "</div>"
                        );
                    }
                    else {
                        $("#validateText").html("<label class='name-status-error'>Sorry!, " + data.payload.error.message + "</label>");
                        $("#namestatus").html("");
                    }
                }
            }else{
                $("#validateText").html("<label class='name-status-error'>Oops!, " + data.payload + "</label>");
                $("#namestatus").html("");

            }
        }).fail(function(err){
            $("#validateText").html("<label class='name-status-error'>Oops!, " + err.responseJSON.message + "</label>");
            $("#namestatus").html("");
        });
    }
}
function activeCrossElement(){
    $("#namestatus").html(
        "<div class='wrapper'>"+
            "<svg class='crossmark addClass animateElement' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 52 52'><circle class='crossmark__circle addClass animateElement' cx='26' cy='26' r='25' fill='none'/>"+
                "<path class='cross__path cross__path--right addClass animateElement' fill='none' d='M16,16 l20,20' />"+
                "<path class='cross__path cross__path--left addClass animateElement' fill='none' d='M16,36 l20,-20' />"+
            "</svg>"+
        "</div>"
        );
}
