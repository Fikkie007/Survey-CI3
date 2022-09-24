<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Please Login First!
            </div>');
        redirect('auth');
    }
}

function fill_question()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Mohon Isi Data Diri Sebelum Mengisi Survey
            </div>');
        redirect('survey');
    }
}
