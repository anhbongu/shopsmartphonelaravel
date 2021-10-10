<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];



    public function listItem($arrParam, $options){
        $result = "";
        if($options['task']=='cart-info'){

            
            if(!empty($arrParam)){
                $arrkey = array();
                foreach($arrParam['quantity'] as $key =>$value){
                    $arrkey[] = $key;
                } 
                $result = DB::table('products')->whereIn('id', $arrkey)->get();


                foreach ($result as $value) {
                    $value->quantity    = $arrParam['quantity'][$value->id];
                    $value->totalPrice  = $arrParam['price'][$value->id];
                }
                            
            }


            return $result;    

          
        }

        if($options['task']=='history'){
            $name = session()->get('admin_name');

            return $result = self::where('create_name', $name)->get();

        }
    }


}
