<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HesapMakinesi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hesap {value1} {islem} {value2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hesapasdasd';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $value1 = $this->argument('value1');
        $value2 = $this->argument('value2');
        $islem = $this->argument('islem');


        if($islem == "+" || $islem == "-" || $islem == "*" || $islem == "/"){

            if ($islem == "+") {

                $value = $value1 + $value2;
    
                
            } else if ($islem == "-") {
    
                $value = $value1 - $value2;
    
    
            } else if ($islem == "*") {
                $value = $value1 * $value2;
    
    
            } else if ($islem == "/") {
                if ($value2 == "0") {
                    $value = "payda  sıfır girilemez";
                } else {
                    $value = $value1 /  $value2;
                }
            }
    
            
        }else{
            $value = "lütfen geçerli bir karakter için işlem deneyiniz..";
        }

        
        $this->info($value);
    }
}
