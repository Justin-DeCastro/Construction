<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    // Specify the table associated with the model if it differs from the default naming convention
    protected $table = 'quotations'; // Adjust if your table name is different

    // Define the attributes that are mass assignable
    protected $fillable = [
        'full_name',
        'company_name',
        'email_address',
        'phone_number',
        'estimated_budget',
        
        'residential_type', // Added based on the new form
        'commercial_type', // Added based on the new form
        'other_commercial_type', // Added based on the new form
        'category', // Updated to match the new form field
      
      
   
        'build_type', // Added based on the new form
        'design_type', // Added based on the new form
        'service',
  
        'project_description',
        'estimated_completion_date',
        'additional_information',
    ];

    // Define any necessary relationships if applicable
    // e.g., public function user() { return $this->belongsTo(User::class); }

    // You might want to add any additional methods or accessors/mutators here
}
