<?php
//load node content
//$node = node_load(3);
//print $node->title."<br>";
//print $node->body['und'][0]['value'];

//load module content
//$block = module_invoke('block_navi', 'block_view', 'block_navi');
//print $block['content'];

function my_form() {
  $form['email'] = array(
    '#type' => 'textfield',
    '#title' => '',
    '#size' => '20',
    '#attributes' =>array('placeholder' => t('E-mail address'))
  );
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Subscribe'),
  );
  return $form;
}
function my_form_validate($form, &$form_state) {
  $valid_email = $form_state['values']['email'];
  if (!valid_email_address($valid_email)) {
  form_set_error('email', 'Sorry. Your email address,' . $valid_email . ', is not valid. Please submit a valid E-mail address.');
  }
}
function my_form_mail($key, &$message, $params) {
  $headers = array(
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=UTF-8;',
    'Content-Transfer-Encoding' => '8Bit',
    'X-Mailer' => 'Drupal'
  );
  foreach ($headers as $key => $value) {
    $message['headers'][$key] = $value;
  }
  $message['subject'] = $params['subject'];
  $message['body'] = $params['body'];
}
function my_form_submit($form, &$form_state) {
    $valid_email = $form_state['values']['email'];
    $from = 'noreply@example.com';
    $body[] = 'Email: '.$valid_email.'<br />URL: '.request_uri();
    $to = 'example@example.com'; // Set this email address - emails will be sent to this email address!
    $params = array(
    'body' => $body,
    'subject' => 'Website Information Request',
    );
    if (drupal_mail('my_form', 'some_mail_key', $to, language_default(), $params, $from, TRUE))
    {
        drupal_set_message('Thanks, we will be in contact with more information soon.');
    } else {
        drupal_set_message('There was an error subscribing you. Please try again later');
    }
}
return drupal_render(drupal_get_form('my_form'));
?>
