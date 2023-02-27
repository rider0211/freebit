<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\CsvLog;
use App\Models\CsvLogDetail;
use Storage;

class HomeController extends Controller
{
    private $RPCusername = 'user';
    private $RPCpassword = 'UeI-7WCHRHkUAwGNO6z2hA==';
    private $wallets = [
        ['password'=>'Lp2pnhtWg', 'path'=>'/home/lam/.electrum-nmc/wallets/default_wallet'],
        ['password'=>'Wa4Sqz4jB', 'path'=>'/home/lam/.electrum-nmc/wallets/second_wallet'],
        ['password'=>'As9Olx0uV', 'path'=>'/home/lam/.electrum-nmc/wallets/third_wallet'],
        ['password'=>'Gg5hKm8Si', 'path'=>'/home/lam/.electrum-nmc/wallets/fourth_wallet'],
        ['password'=>'Hu1hKi2Gr', 'path'=>'/home/lam/.electrum-nmc/wallets/fifth_wallet'],
        ['password'=>'A7dM9Sfla', 'path'=>'/home/lam/.electrum-nmc/wallets/sixth_wallet'],
        ['password'=>'B9kfU6Lae', 'path'=>'/home/lam/.electrum-nmc/wallets/seventh_wallet'],
        ['password'=>'Hek7f2Spu', 'path'=>'/home/lam/.electrum-nmc/wallets/eighth_wallet'],
        ['password'=>'Y7fI9yA2f', 'path'=>'/home/lam/.electrum-nmc/wallets/nineth_wallet'],
        ['password'=>'Nu8yW2vzx', 'path'=>'/home/lam/.electrum-nmc/wallets/tenth_wallet'],
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menu = 'home';
        $transactions = Transaction::orderBy('id', 'desc')->limit(12)->get();
        return view('home', compact('transactions', 'menu'));
    }

    public function main(Request $req)
    {
        return view('main');
    }

    public function regist_wallet(Request $req){
        $validated = $req->validate([
            'wallet_address' => ['required', 'regex:/^[n|N|M][a-zA-Z0-9]{33,41}$/'],
        ]);
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://127.0.0.1:7777",
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POSTFIELDS => '{"id":"curltext","method":"validateaddress","params":["'.$validated['wallet_address'].'"]}',
            CURLOPT_POST => 1,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return ['status'=>false, 'message'=>$err];
        } else {
            return ['status'=>true, 'payload'=>json_decode($response)];
        }
    }
    public function findDomainName(Request $req){
        $validated = $req->validate([
            'name' => ['required'],
        ]);
        $count = Transaction::where('domain_name', $validated['name'])->count();
        if($count>0){
            return ['status'=>false, 'payload'=>'The name is already requested by another user.'];
        }else{
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "http://127.0.0.1:7777",
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_show","params":["d/'.$validated['name'].'"]}',
                CURLOPT_POST => 1,
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                return ['status'=>false, 'payload'=>$err];
            } else {
                return ['status'=>true, 'payload'=>json_decode($response)];
            }
        }
    }
    public function validateTwitterName(Request $req) {
        $validated = $req->validate([
            'walletAddress' => ['required', 'regex:/^[n|N|M][a-zA-Z0-9]{33,41}$/'],
            'domainName' => ['required'],
            'twitterUserName' => ['required', 'regex:/^[A-Za-z0-9_]{4,15}$/'],
        ]);
        // $count = Transaction::where('twitter_username', $validated['twitterUserName'])->count();
        // if($count>0){
        //     return ['status'=>false, 'payload'=>'You have already received the domain name by using this Twitter handle.'];
        // }else{
        //     $curl = curl_init();

        //     curl_setopt_array($curl, [
        //         CURLOPT_URL => "https://twitter135.p.rapidapi.com/UserByScreenName/?username=".$validated['twitterUserName'],
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_ENCODING => "",
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 30,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => "GET",
        //         CURLOPT_HTTPHEADER => [
        //             "X-RapidAPI-Host: twitter135.p.rapidapi.com",
        //             "X-RapidAPI-Key: 9e2f1de020mshda35e58fe7e0a3cp1591ebjsn216923f62c07"
        //         ],
        //     ]);

        //     $response = curl_exec($curl);
        //     $err = curl_error($curl);

        //     curl_close($curl);

        //     if ($err) {
        //         return ['status'=>false, 'payload'=>$err];
        //     } else {
        //         $res = json_decode($response);
        //         if(isset($res->data->user)){
        //             $result = $res->data->user->result;
        //             if(isset($result->legacy->name) && strpos($result->legacy->name, ".bit") !== false) {
                        $transaction = new Transaction();
                        $transaction->wallet_address = $validated['walletAddress'];
                        $transaction->domain_name = $validated['domainName'];
                        $transaction->twitter_username = $validated['twitterUserName'];
                        if($transaction->save()) return ['status'=>true, 'payload'=>''];
                        else return ['status'=>false, 'payload'=>'An error occured. Please contact us for more details.'];
        //             }
        //             else return ['status'=>false, 'payload'=>'You did not change your display name yet.'];
        //         }
        //         else return ['status'=>false, 'payload'=>'Please input the valid username.'];
        //     }
        // }
    }

    public function finalization(Request $req) {
        $validated = $req->validate([
            'walletAddress' => ['required', 'regex:/^[n|N|M][a-zA-Z0-9]{33,41}$/'],
            'domainName' => ['required'],
            'twitterUserName' => ['required', 'regex:/^[A-Za-z0-9_]{4,15}$/'],
            'survey' => ['required', 'digits_between:1,10'],
        ]);
        $transaction = Transaction::where('wallet_address', $validated['walletAddress'])
                        ->where('domain_name', $validated['domainName'])
                        ->where('twitter_username', $validated['twitterUserName'])
                        ->first();

        $transaction->rate = $validated['survey'];
        if($transaction->save()) return ['status'=>true, 'payload'=>'AX62930MB91'];
        else return ['status'=>false, 'payload'=>'An error occured. Please contact us for more details.'];
    }
    public function statistics(Request $req)
    {
        $menu = 'orders';
        $transactions = Transaction::where("twitter_username", "!=", "Batch_Mode")->get();
        return view('statistics', compact('transactions', 'menu'));
    }

    public function cron_job() {
        $colors = ["blue", "darkblue", "darkgreen", "darkred", "green", "grey", "lightblue", "lightorange", "neongreen", "orange", "purple", "rarepurple", "red", "yellow"];

        shuffle($this->wallets);
        $curl = curl_init();

        $pendings = Transaction::where('status', 1);
        $pending_count = $pendings->count();

        if($pending_count>0){
            foreach($this->wallets as $wallet) {
                curl_setopt_array($curl, [
                    CURLOPT_URL => "http://127.0.0.1:7777",
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_POSTFIELDS => '{"id":"curltext","method":"updatequeuedtransactions","params":{"wallet":"'.$wallet['path'].'"}}',
                    CURLOPT_POST => 1,
                ]);

                curl_exec($curl);
            }

            $pending_data = $pendings->get();
            foreach($pending_data as $row) {
                curl_setopt_array($curl, [
                    CURLOPT_URL => "http://127.0.0.1:7777",
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_show","params":["d/'.$row->domain_name.'"]}',
                    CURLOPT_POST => 1,
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                if ($err) {
                    continue;
                } else {
                    $result = json_decode($response);
                    if(isset($result->result)){
                        $transaction = Transaction::find($row->id);
                        $transaction->status = 2;
                        $transaction->save();
                    }
                }   
            }

        }

        $wallet_count = count($this->wallets);
        $queued = Transaction::where('status', 0)->limit($wallet_count * 10)->get();
        foreach($queued as $key=>$row) {
            $w_index = floor($key/10);
            curl_setopt_array($curl, [
                CURLOPT_URL => "http://127.0.0.1:7777",
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_autoregister","params":{"identifier":"d/'.$row->domain_name.'", "value": "{\'NFT\': {\'url\': \'https://ipfs.io/ipns/twittereggs.org/'.$colors[array_rand($colors)].'.jpg\'}, \'Discord\': {\'url\': \'https://discord.com/invite/ZcqRuefaCP\'}, \'message\': \'**REMEMBER to renew your name every 36000 blocks (~8 months) to avoid expiration. With just a couple Namecoin ($NMC) you will have enough to renew for over 100 years(!)\'}", "destination":"'.$row->wallet_address.'", "password":"'.$this->wallets[$w_index]['password'].'", "wallet":"'.$this->wallets[$w_index]['path'].'"}}',
                CURLOPT_POST => 1,
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            if ($err) {
                continue;
            } 
            else {
                $result = json_decode($response);
                if(is_null($result->result)) {
                    $current_row = Transaction::find($row->id);
                    $current_row->status = 1;
                    $current_row->save();
                }else{
                    shuffle($this->wallets);
                }          
            }
        }

        //batch register with csv
        $csv_pending = CsvLog::where('status', 2);
        $csv_p_count = $csv_pending->count();
        if($csv_p_count>0) {
            foreach($this->wallets as $wallet) {
                curl_setopt_array($curl, [
                    CURLOPT_URL => "http://127.0.0.1:7777",
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_POSTFIELDS => '{"id":"curltext","method":"updatequeuedtransactions","params":{"wallet":"'.$wallet['path'].'"}}',
                    CURLOPT_POST => 1,
                ]);

                curl_exec($curl);
            }

            $csv_data = $csv_pending->get();
            foreach($csv_data as $row) {
                curl_setopt_array($curl, [
                    CURLOPT_URL => "http://127.0.0.1:7777",
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_show","params":["d/'.$row->name.'"]}',
                    CURLOPT_POST => 1,
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                if ($err) {
                    continue;
                } else {
                    $result = json_decode($response);
                    if(isset($result->result)){
                        $log = CsvLog::find($row->id);
                        $log->status = 3;
                        $log->save();
                    }
                }   
            }
        }

        $csv_queued = CsvLog::where('status', 0);
        $csv_q_count = $csv_queued->count();
        if($csv_q_count>0) {
            $csv_data = $csv_queued->get();
            foreach($csv_data as $row) {
                $count = Transaction::where('domain_name', $row->name)->count();
                if($count>0) {
                    $log = CsvLog::find($row->id);
                    $log->status = 4;
                    $log->description = 'This name is already being registered.';
                    $log->save();
                }else{
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "http://127.0.0.1:7777",
                        CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                        CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_show","params":["d/'.$row->name.'"]}',
                        CURLOPT_POST => 1,
                    ]);
        
                    $response = curl_exec($curl);
                    $err = curl_error($curl);
        
                    if ($err) {
                        $log = CsvLog::find($row->id);
                        $log->status = 4;
                        $log->description = 'Checking name availability is failed.';
                        $log->save();
                    } else {
                        $data = json_decode($response);
                        if(isset($data->result)) {
                            $log = CsvLog::find($row->id);
                            $log->status = 4;
                            $log->description = 'This name is exist.';
                            $log->save();
                        }
                        else if(isset($data->error)) {
                            if($data->error->message == 'Name purportedly never existed' || strpos($data->error->message, 'Name is purportedly expired')!==false) {
                                $log = CsvLog::find($row->id);
                                $log->status = 1;
                                $log->save();
                            }else{
                                $log = CsvLog::find($row->id);
                                $log->status = 4;
                                $log->description = 'Unknown error';
                                $log->save();
                            }
                        }
                    }

                }
            }
        }

        $csv = CsvLog::where('status', 1);
        $csv_count = $csv->count();
        if($csv_count>0) {
            $csv_data = $csv->get();
            foreach($csv_data as $key=>$row) {
                $w_index = floor($key/10);
                curl_setopt_array($curl, [
                    CURLOPT_URL => "http://127.0.0.1:7777",
                    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                    CURLOPT_USERPWD => $this->RPCusername.':'.$this->RPCpassword,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_POSTFIELDS => '{"id":"curltext","method":"name_autoregister","params":{"identifier":"d/'.$row->name.'", "value": "'.$row->dvalue.'", "destination":"'.$row->wallet.'", "password":"'.$this->wallets[$w_index]['password'].'", "wallet":"'.$this->wallets[$w_index]['path'].'"}}',

                    CURLOPT_POST => 1,
                ]);
    
                $response = curl_exec($curl);
                $err = curl_error($curl);
                if ($err) {
                    continue;
                } 
                else {
                    $result = json_decode($response);
                    if(is_null($result->result)) {
                        $current_row = CsvLog::find($row->id);
                        $current_row->status = 2;
                        $current_row->save();
                    }else{
                        shuffle($this->wallets);
                    }          
                }
            }
        }


        curl_close($curl);
    }

    public function batch_register()
    {
        $logs = CsvLog::all();
        return view('batch_register', compact('logs'));
    }

    public function csv_register(Request $request) {
        $validated = $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt|max:10240',
            'wallet_address' => ['required', 'regex:/^[n|N|M][a-zA-Z0-9]{33,41}$/'],
            'dvalue' => ['required'],
        ]);

        if($request->file()) {
            $fileName = time().'_'.$request->csv_file->getClientOriginalName();
            $filePath = $request->file('csv_file')->storeAs('csv', $fileName, 'public');

            $contents = Storage::get('public/csv/'.$fileName);
            foreach (explode(",", $contents) as $key=>$name){
                $filtered = str_replace(array("\r", "\n", " "), '', $name);
                if(empty($filtered)) continue;
                $log = new CsvLog();
                $log->name = $filtered;
                $log->wallet = $validated["wallet_address"];
                $log->dvalue = $validated["dvalue"];
                $log->save();
            }
            
            return redirect()->back()->with('success', "Successfully requested.");
        }
    }
}
