function registerWalletAddress(res){
    var wallet_address = $('#wallet_address').val();
    const wallet_address_regEXP = new RegExp('^[n|N|M][a-zA-Z0-9]{33,41}$');
    var validate = wallet_address_regEXP.test(wallet_address);
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    if(!validate){
        swal("Oops!", "Please input the correct wallet address!");  
    }else{
        $.post("/register_wallet_Address",
        {
            _token: csrf,
            wallet_address : wallet_address,
        }).done(function(data){
            if(data.status){
                if(data.payload.result) {
                    res({data:true});
                    changeWizardTitle(2);
                }else{
                    swal("Oops! Invalid Address.");  
                }
            }else{
                swal("Oops! An error occured.", data.payload);
            }
        }).fail(function(err){
            swal("Oops!", err.responseJSON.message);  
        });
    }
}

function findDomainName(res){
    var domainName = $('#request_domainName').val();
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    if(domainName == ""){
        swal("Oops!", "Please input Domain Name!");  
    }else{
        $.post("/findDomainName",
        {
            _token: csrf,
            name : domainName,
        }).done(function(data){
            if(data.status){
                if(data.payload.result) {
                    swal("Sorry! This name is already exist.", "<div class=text-left>Address: "+data.payload.result.address+"<br>Transaction ID: "+data.payload.result.txid+"<br>Value: "+data.payload.result.value+"</div>");
                }else if(data.payload.error){
                    if(data.payload.error.message=='Name purportedly never existed' || data.payload.error.message.includes('Name is purportedly expired'))
                        {
                            res({data:true});
                            changeWizardTitle(1);
                        }
                    else swal("Sorry!", data.payload.error.message);
                }
            }else{
                swal("Oops!", data.payload);
            }
        }).fail(function(err){
            swal("Oops!", err.responseJSON.message);  
        });
    }
}

function validateTwitterDisplayName(res){
    var wallet_address = $('#wallet_address').val();
    var domainName = $('#request_domainName').val();

    var twitterUserName = $('#twitterUserName').val().replace(/@/g, '');
    const twitter_username_regEXP = new RegExp('^[A-Za-z0-9_]{4,15}$');
    var username_validate = twitter_username_regEXP.test(twitterUserName);
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(!username_validate){
        swal("Oops!", "Please input the correct twitter username!");  
    }else{
        swal({  
            title: '<div style="text-align: center;font-size: 23px;">Are you sure?</div>',
            html: 'Do you want to register <span class="text-danger">'+domainName+'.bit</span> and send it to <span class="text-danger">'+wallet_address+'</span> this address?',
            showCancelButton: true,  
            confirmButtonText: `Yes`,  
        }).then((result) => {  
          if (result.value) {    
                $.post("/validate_twitter_displayName",
                {
                    _token: csrf,
                    walletAddress : wallet_address,
                    domainName: domainName,
                    twitterUserName : twitterUserName,
                }).done(function(data){
                    if(data.status){
                        $("#name-span").text(domainName+'.bit');
                        $("#wallet-span").text(wallet_address);
                        res({data:true});
                        changeWizardTitle(3);
                    }else{
                        swal("Oops!", data.payload);
                    }
                }).fail(function(err){
                    swal("Oops!", err.responseJSON.message);  
                });
          }
        });
    }
    return data;
}
function finalization(res){
    var wallet_address = $('#wallet_address').val();
    var domainName = $('#request_domainName').val();
    var twitterUserName = $('#twitterUserName').val().replace(/@/g, '');

    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    var data;
    if(!email_validate){
        swal("Oops!", "Please input correct your email!");  
    }else{
        $.post("/finalization",
        {
            _token: csrf,
            walletAddress : wallet_address,
            domainName: domainName,
            twitterUserName: twitterUserName,
        }).done(function(data){
            if(data.status){
                swal("CONFIRMATION CODE: "+data.payload, "Please save this code in a safe area for some later use.");  
            }else{
                swal("Oop!", data.payload);  
            }
        }).fail(function(err){
            swal("Oops!", err.responseJSON.message);  
        });
    }
    return data;
}

function changeImage(step){
    var describeImage = document.getElementById("describeImage");
    describeImage.src = "./assets/images/describe/"+step+".jpg";
}

function changeWizardTitle(step){
    var previous = $('a[href$="#previous"]');
    var next = $('a[href$="#next"]');
    
    switch (step) {
        case 0:
            $('#wizard-title').html("<h3 class='heaing'>Find your Name</h3><p>The power of a .eth name but on a blockchain that's even more secure than Ethereum.  Best of all, we're giving it to you for FREE:  no money, no cookies, no email. </p><hr> <p>A FREE .bit name of your own.  Whether this is your first NFT or not, it very well should be your most cherished.  Enjoy!</p>");
            next[0].innerHTML = "Next: Download";
            $('#slideshow').hide();
            $('#describeTitle').show();
            break;
        case 1:
            $('#wizard-title').html('');
            previous[0].innerHTML = "Back: FindName";
            next[0].innerHTML = "Next: Twitter";
            $('#slideshow').show();
            $('#describeTitle').hide();
            break;
        case 2:
            $('#wizard-title').html('<h3 class="heading">Twitter Display Name</h3>');
            previous[0].innerHTML = "Back: Download";
            next[0].innerHTML = "Next: Success";
            $('#slideshow').hide();
            break;
        case 3:
            var wallet_address = $('#wallet_address').val();
            var domainName = $('#request_domainName').val();
            previous[0].innerHTML = "Back: Twitter";
            var finishElement = $('a[href$="#finish"]').parent();
            finishElement[0].style.display = "none";
            $('#wizard-title').html('<h3 class="heading">Congratulations!</h3>');
            $('#domain-name-mark').text(domainName+'.bit');
            $('#wallet-address-mark').text(wallet_address);
            break;    
    }
}