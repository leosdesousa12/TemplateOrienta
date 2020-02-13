&lt;?php
require_once __DIR__ . '/../security.php';
  
class Service_Contact_Form {
    public function send_contact_form() {
        return (object) array(
            'status' => 'success',
            'message' => 'Seu e-mail foi enviado com sucesso!'
        );
    }

    public function send_contact_form() {
    if( !isset( $_POST[ 'field_name' ] ) ) {
        return false;
    }
    
    $all_fields = $this->get_fields();
    $are_all_fields_ok = $this->are_all_fields_ok( $all_fields );
    
    if( ! $fields_its_ok ) {
        // do something
    }
    
    return (object) array(
        'status' => 'success',
        'message' => 'Seu e-mail foi enviado com sucesso!'
    );
}

private function get_fields() {
    $fields = array(
        'name' => array(
            'value' => sanitize_text_field( $_POST[ 'field_name' ] ),
            'is_required' => true
        ),
        'email' => array(
            'value' => sanitize_email( $_POST[ 'field_email' ] ),
            'is_required' => true
        ),
        'subject' => array(
            'value' => sanitize_text_field( $_POST[ 'field_subject' ] ),
            'is_required' => false
        ),
        'message' => array(
            'value' => wp_kses( $_POST[ 'field_message' ], 'br' ),
            'is_required' => true
        )
    );
    
    return $fields;
}
private function are_all_fields_ok( $fields ) {
    foreach( $fields as $field ) {
        if( $this->is_field_required_empty( $field ) ) {
            return false;
        }
    }
    return true;


}

