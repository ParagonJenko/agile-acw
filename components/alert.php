<?php 
if(isset($alert_type)){
    echo '
    <div class="alert alert-'.$alert_type.' alert-dismissible fade show" role="alert">
        '.$alert_message.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    ';
}
?>
