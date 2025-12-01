<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProblemFCT extends Model
{
    protected $table = 'problem_fcts';

    protected $fillable = [
        'register_fct_id',
        'product_model',
        'registration_no',
        'date',
        'time',
        'step',
        'error',
        'action',
        'result',
        'pic',
    ];
        protected static function booted()
        {
            static::creating(function ($problemFct) {
                if ($problemFct->register_fct_id) {
                    $registerFct = \App\Models\RegisterFCT::find($problemFct->register_fct_id);
                    if ($registerFct) {
                        $problemFct->product_model = $registerFct->product_model;
                        $problemFct->registration_no = $registerFct->registration_no;
                    }
                }
            });

            static::created(function ($problemFct) {
                $date = $problemFct->date;
                $folder = 'C:\Users\agisn\Downloads\History_FCT';
                if (!is_dir($folder)) {
                    mkdir($folder, 0777, true);
                }
                $filename = $folder . "/problem_fct_{$date}.csv";

                $rows = self::where('date', $date)->get();
                $columns = [
                    'id', 'register_fct_id', 'product_model', 'registration_no', 'date', 'time', 'step', 'error', 'action', 'result', 'pic'
                ];

                $file = fopen($filename, 'w');
                fputcsv($file, $columns);
                foreach ($rows as $row) {
                    fputcsv($file, $row->only($columns));
                }
                fclose($file);
            });
        }
    public function registerFct()
    {
        return $this->belongsTo(RegisterFCT::class, 'register_fct_id');
    }
}
