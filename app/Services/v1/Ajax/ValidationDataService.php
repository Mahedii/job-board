<?php

namespace App\Services\v1\Ajax;

use App\Enums\Tables;
use App\Enums\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class ValidationDataService
{
    // /**
    //  * Client form request container
    //  *
    //  * @var Request $request
    //  */
    // private Request $request;

    // /**
    //  * Set the request container
    //  */
    // public function __construct(Request $request)
    // {
    //     $this->request = $request;
    // }

    // /**
    //  * Get the data validated according to its class
    //  *
    //  * @return array
    //  */
    // public function getResponse(): array
    // {
    //     $tableSecretKey = Crypt::decryptString($this->request->secret_key);

    //     // // #### Method 1 ####
    //     // // #### Get value from config/const.php ####
    //     // foreach (config('const.Tables') as $key => $data) {
    //     //     // Check if the $tableSecretKey value matches with the const Tables key
    //     //     if ($tableSecretKey === $key) {
    //     //         // Get the value of const Requests key
    //     //         $requestClass = config('const.Requests.' . $key);
    //     //     }
    //     // }

    //     // #### Method 2 ####
    //     // #### Get value from Enums ####
    //     $requestClass = null;
    //     $tablesEnumConstant = Tables::class . '::' . strtoupper($tableSecretKey);

    //     // Check if the constant exists
    //     if (defined($tablesEnumConstant)) {
    //         // Get the constant value from the model enum based on the matched table enum constant
    //         $requestsEnumConstant = Requests::class . '::' . strtoupper($tableSecretKey);

    //         // Check if the constant exists
    //         if (defined($requestsEnumConstant)) {
    //             $requestClass = constant($requestsEnumConstant);
    //         }
    //     }

    //     if ($requestClass == null) {
    //         return ['success' => false, "status" => "error", "message" => "Data validation error: Request rules not found"];
    //     } else {
    //         return $this->ajaxValidation($requestClass);
    //     }
    // }

    // /**
    //  * Perform AJAX validation for a single input
    //  *
    //  * @param string $requestClass
    //  * @return array
    //  */
    // private function ajaxValidation(string $requestClass): array
    // {
    //     $rules = [];
    //     $messages = [];
    //     $fieldName = $this->request->field;
    //     $value = $this->request->value;
    //     $methodTypeValue = $this->request->methodTypeValue;

    //     if (class_exists($requestClass)) {
    //         // Instantiate the form request class based on the specified $requestClass
    //         $formRequest = new $requestClass();
    //         if ($methodTypeValue === 'create') {
    //             if (method_exists($formRequest, 'rulesForCreate')) {
    //                 // Get the validation rules for the specified field
    //                 $rules = $formRequest->rulesForCreate();

    //                 // Get the specific rule for the field
    //                 $fieldRules = $rules[$fieldName] ?? [];

    //                 // Create a temporary array with the validation rules for the specified field
    //                 $tempRules = [$fieldName => $fieldRules];
    //             }
    //         } elseif ($methodTypeValue === 'update') {
    //             if (method_exists($formRequest, 'rulesForUpdate')) {
    //                 // Get the validation rules for the specified field
    //                 $rules = $formRequest->rulesForUpdate();

    //                 // Get the specific rule for the field
    //                 $fieldRules = $rules[$fieldName] ?? [];

    //                 // Create a temporary array with the validation rules for the specified field
    //                 $tempRules = [$fieldName => $fieldRules];
    //             }
    //         } else {
    //             if (method_exists($formRequest, 'rules')) {
    //                 // Get the validation rules for the specified field
    //                 $rules = $formRequest->rules();

    //                 // Get the specific rule for the field
    //                 $fieldRules = $rules[$fieldName] ?? [];

    //                 // Create a temporary array with the validation rules for the specified field
    //                 $tempRules = [$fieldName => $fieldRules];
    //             }
    //         }

    //         if (method_exists($formRequest, 'messages')) {
    //             // Get the validation messages for the specified field
    //             $messages = $formRequest->messages();
    //         }

    //         // Create a temporary array with the validation messages for the specified field
    //         // $tempMessages = [$fieldName . '.' . $rules[$fieldName]];
    //     }
    //     // Create a validator instance for the specified field
    //     $validator = Validator::make([$fieldName => $value], $tempRules, $messages);

    //     // Check if the validation fails
    //     if ($validator->fails()) {
    //         $errors = $validator->errors();

    //         $result = ['success' => false, 'errors' => $errors];
    //     } else {
    //         $result = ['success' => true];
    //     }

    //     // return response
    //     return $result;
    // }
}
