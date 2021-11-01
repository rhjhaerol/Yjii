<?php

// Login biasa tnpa js
function validate_login($uname, $pwd){

    return ($uname=='admin' && $pwd =='admin');
}

// Sign up
function validate_regist($data) {
    $result = TRUE;

    foreach ($data as $key => $value) {
        if (empty($value)) {
            $result = FALSE;
            break;
        }
    }
    return $result;
}

// render form
function render_form($datas){

    $result = '';
    
    switch ($datas['type']) {
        case 'email':
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
        case 'password':
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
        case 'radio':

            $result .= "<div class=''><label class='form-check-label'>{$datas['label']}</label>";

            $count = 0;

            foreach ($datas['data'] as $key => $value) {

                $checked = $count == 0 ? 'checked' : '';

                $result .= "
                <div class='form-check'>
                    <label class='form-check-label'> 
                        <input type='radio' class='form-check-input' name='{$datas['name']}' value='{$value['value']}' $checked>
                        {$value['label']}
                    </label>
                </div>
                ";

                $count++;
            }

            $result .= '</div>';

            break;
        
        default:
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
    }
    return $result;
}

?>