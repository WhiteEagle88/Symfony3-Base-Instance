<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ky', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Группаны жаңылоо',
    'group.show.name' => 'Группанын аталышы',
    'group.new.submit' => 'Группаны түзүү',
    'group.flash.updated' => 'Группа жаңыланды',
    'group.flash.created' => 'Группа түзүлдү',
    'group.flash.deleted' => 'Группа өчүрүлдү',
    'security.login.username' => 'Колдонуучунун аты',
    'security.login.password' => 'Сырдык сөз',
    'security.login.remember_me' => 'Эске тутуу',
    'security.login.submit' => 'Кирүү',
    'profile.show.username' => 'Колдонуучунун аты',
    'profile.show.email' => 'Электрондук почтасы',
    'profile.edit.submit' => 'Жаңылоо',
    'profile.flash.updated' => 'Колдонуучунун профили жаңыланды',
    'change_password.submit' => 'Сырдык сөздү өзгөртүү',
    'change_password.flash.success' => 'Сырдык сөз өзгөрүлдү',
    'registration.check_email' => 'Кат %email% почтасына жөнөтүлдү. Анын ичинде каттону аныктоочу шилтеме бар.',
    'registration.confirmed' => 'Куттуктайбыз %username%, сиздин аккаунтуңуз ийгиликтүү катталды.',
    'registration.back' => 'Мурунку баракчага кайтуу.',
    'registration.submit' => 'Катталуу',
    'registration.flash.user_created' => 'Колдонуучу ийгиликтүү түзүлдү.',
    'registration.email.subject' => 'Кош келдиңиз, %username%!',
    'registration.email.message' => 'Саламатсызбы, %username%!

 Регистрацияны анныктоо үчүн %confirmationUrl%

 шилтемеси кириңиз.',
    'resetting.password_already_requested' => 'Сырдык сөздү сиз үчүн буга чейин 24 саат ичинде суралды.',
    'resetting.check_email' => 'Кат %email% почтасына жөнөтүлдү. Ал жакта шилтеме бар жана ал шилтемеге кирүү менен сиздин сырдык сөзүңүз өзгөрөт.',
    'resetting.request.invalid_username' => '"%username%" аттуу колдонуучу жок.',
    'resetting.request.username' => 'Колдонуучунун аты',
    'resetting.request.submit' => 'Сырдык сөздү өзгөртүү',
    'resetting.reset.submit' => 'Сырдык сөздү өзгөртүү',
    'resetting.flash.success' => 'Сырдык сөз ийгиликтүү өзгөрдү',
    'resetting.email.subject' => 'Сырдык сөздү өзгөртүү',
    'resetting.email.message' => 'Саламатсызбы, %username%!

 Сырдык сөздү өзгөртүү үчүн, сураныч боюнча кириңиз

Ийгилик каалоо менен, 
сайттын командасы.
',
    'layout.logout' => 'Чыгуу',
    'layout.login' => 'Кирүү',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Сиз %username% аты менен кирдиңиз',
    'form.group_name' => 'Группанын аты',
    'form.username' => 'Колдонуучунун аты',
    'form.email' => 'Электрондук почтасы',
    'form.current_password' => 'Азыркы сырдык сөз',
    'form.password' => 'Сырдык сөз',
    'form.password_confirmation' => 'Сырдык сөздү аныктоо',
    'form.new_password' => 'Жаңы сырдык сөз',
    'form.new_password_confirmation' => 'Сырдык сөздү аныктоо',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'Логин колдонулууда',
    'fos_user.username.blank' => 'Логиниңизди жазыңыз',
    'fos_user.username.short' => '[-Inf,Inf]Логиниңиз биз күткөндөн кыска',
    'fos_user.username.long' => '[-Inf,Inf]Логиниңиз биз күткөндөн узун',
    'fos_user.email.already_used' => 'Email колдонулууда',
    'fos_user.email.blank' => 'Электрондук почтаңызды жазыңыз',
    'fos_user.email.short' => '[-Inf,Inf]Email биз күткөндөн кыска',
    'fos_user.email.long' => '[-Inf,Inf]Email биз күткөндөн узун',
    'fos_user.email.invalid' => 'Email туура эмес форматта',
    'fos_user.password.blank' => 'Сырдык сөзүңүздү жазыңыз',
    'fos_user.password.short' => '[-Inf,Inf]Сырдык сөзүңүз биз күткөндөн кыска',
    'fos_user.password.mismatch' => 'Сырдык сөздөр бири-бирине туура келбейт',
    'fos_user.new_password.blank' => 'Жаңы сырдык сөз жазыңыз',
    'fos_user.new_password.short' => '[-Inf,Inf]Жаңы сырдык сөз биз күткөндөн кыска',
    'fos_user.current_password.invalid' => 'Сырдык сөз туура эмес жазылды',
    'fos_user.group.blank' => 'Жаңы группанын атын жазыңыз',
    'fos_user.group.short' => '[-Inf,Inf]Жаңы группанын аты биз күткөндөн кыска',
    'fos_user.group.long' => '[-Inf,Inf]Жаңы группанын аты биз күткөндөн узун',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Log in',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Log out',
    'layout.login' => 'Log in',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Add new',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'date_range_start' => 'From',
    'date_range_end' => 'To',
    'aliceblue' => 'AliceBlue',
    'antiquewhite' => 'AntiqueWhite',
    'aqua' => 'Aqua',
    'aquamarine' => 'Aquamarine',
    'azure' => 'Azure',
    'beige' => 'Beige',
    'bisque' => 'Bisque',
    'black' => 'Black',
    'blanchedalmond' => 'BlanchedAlmond',
    'blue' => 'Blue',
    'blueviolet' => 'BlueViolet',
    'brown' => 'Brown',
    'burlywood' => 'BurlyWood',
    'cadetblue' => 'CadetBlue',
    'chartreuse' => 'Chartreuse',
    'chocolate' => 'Chocolate',
    'coral' => 'Coral',
    'cornflowerblue' => 'CornflowerBlue',
    'cornsilk' => 'Cornsilk',
    'crimson' => 'Crimson',
    'cyan' => 'Cyan',
    'darkblue' => 'DarkBlue',
    'darkcyan' => 'DarkCyan',
    'darkgoldenrod' => 'DarkGoldenRod',
    'darkgray' => 'DarkGray',
    'darkgreen' => 'DarkGreen',
    'darkkhaki' => 'DarkKhaki',
    'darkmagenta' => 'DarkMagenta',
    'darkolivegreen' => 'DarkOliveGreen',
    'darkorange' => 'DarkOrange',
    'darkorchid' => 'DarkOrchid',
    'darkred' => 'DarkRed',
    'darksalmon' => 'DarkSalmon',
    'darkseagreen' => 'DarkSeaGreen',
    'darkslateblue' => 'DarkSlateBlue',
    'darkslategray' => 'DarkSlateGray',
    'darkturquoise' => 'DarkTurquoise',
    'darkviolet' => 'DarkViolet',
    'deeppink' => 'DeepPink',
    'deepskyblue' => 'DeepSkyBlue',
    'dimgray' => 'DimGray',
    'dodgerblue' => 'DodgerBlue',
    'firebrick' => 'FireBrick',
    'floralwhite' => 'FloralWhite',
    'forestgreen' => 'ForestGreen',
    'fuchsia' => 'Fuchsia',
    'gainsboro' => 'Gainsboro',
    'ghostwhite' => 'GhostWhite',
    'gold' => 'Gold',
    'goldenrod' => 'GoldenRod',
    'gray' => 'Gray',
    'green' => 'Green',
    'greenyellow' => 'GreenYellow',
    'honeydew' => 'HoneyDew',
    'hotpink' => 'HotPink',
    'indianred' => 'IndianRed',
    'indigo' => 'Indigo',
    'ivory' => 'Ivory',
    'khaki' => 'Khaki',
    'lavender' => 'Lavender',
    'lavenderblush' => 'LavenderBlush',
    'lawngreen' => 'LawnGreen',
    'lemonchiffon' => 'LemonChiffon',
    'lightblue' => 'LightBlue',
    'lightcoral' => 'LightCoral',
    'lightcyan' => 'LightCyan',
    'lightgoldenrodyellow' => 'LightGoldenRodYellow',
    'lightgray' => 'LightGray',
    'lightgreen' => 'LightGreen',
    'lightpink' => 'LightPink',
    'lightsalmon' => 'LightSalmon',
    'lightseagreen' => 'LightSeaGreen',
    'lightskyblue' => 'LightSkyBlue',
    'lightslategray' => 'LightSlateGray',
    'lightsteelblue' => 'LightSteelBlue',
    'lightyellow' => 'LightYellow',
    'lime' => 'Lime',
    'limegreen' => 'LimeGreen',
    'linen' => 'Linen',
    'magenta' => 'Magenta',
    'maroon' => 'Maroon',
    'mediumaquamarine' => 'MediumAquaMarine',
    'mediumblue' => 'MediumBlue',
    'mediumorchid' => 'MediumOrchid',
    'mediumpurple' => 'MediumPurple',
    'mediumseagreen' => 'MediumSeaGreen',
    'mediumslateblue' => 'MediumSlateBlue',
    'mediumspringgreen' => 'MediumSpringGreen',
    'mediumturquoise' => 'MediumTurquoise',
    'mediumvioletred' => 'MediumVioletRed',
    'midnightblue' => 'MidnightBlue',
    'mintcream' => 'MintCream',
    'mistyrose' => 'MistyRose',
    'moccasin' => 'Moccasin',
    'navajowhite' => 'NavajoWhite',
    'navy' => 'Navy',
    'oldlace' => 'OldLace',
    'olive' => 'Olive',
    'olivedrab' => 'OliveDrab',
    'orange' => 'Orange',
    'orangered' => 'OrangeRed',
    'orchid' => 'Orchid',
    'palegoldenrod' => 'PaleGoldenRod',
    'palegreen' => 'PaleGreen',
    'paleturquoise' => 'PaleTurquoise',
    'palevioletred' => 'PaleVioletRed',
    'papayawhip' => 'PapayaWhip',
    'peachpuff' => 'PeachPuff',
    'peru' => 'Peru',
    'pink' => 'Pink',
    'plum' => 'Plum',
    'powderblue' => 'PowderBlue',
    'purple' => 'Purple',
    'rebeccapurple' => 'RebeccaPurple',
    'red' => 'Red',
    'rosybrown' => 'RosyBrown',
    'royalblue' => 'RoyalBlue',
    'saddlebrown' => 'SaddleBrown',
    'salmon' => 'Salmon',
    'sandybrown' => 'SandyBrown',
    'seagreen' => 'SeaGreen',
    'seashell' => 'SeaShell',
    'sienna' => 'Sienna',
    'silver' => 'Silver',
    'skyblue' => 'SkyBlue',
    'slateblue' => 'SlateBlue',
    'slategray' => 'SlateGray',
    'snow' => 'Snow',
    'springgreen' => 'SpringGreen',
    'steelblue' => 'SteelBlue',
    'tan' => 'Tan',
    'teal' => 'Teal',
    'thistle' => 'Thistle',
    'tomato' => 'Tomato',
    'turquoise' => 'Turquoise',
    'violet' => 'Violet',
    'wheat' => 'Wheat',
    'white' => 'White',
    'whitesmoke' => 'WhiteSmoke',
    'yellow' => 'Yellow',
    'yellowgreen' => 'YellowGreen',
  ),
  'SonataBlockBundle' => 
  array (
    'sonata.block.container' => 'Container',
    'sonata.block.text' => 'Simple text',
    'sonata.block.rss' => 'RSS feed',
    'sonata.block.menu' => 'Menu',
    'sonata.block.template' => 'Template',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Delete',
    'btn_batch' => 'OK',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_create_and_return_to_list' => 'Create and return to list',
    'btn_filter' => 'Filter',
    'btn_advanced_filters' => 'Advanced filters',
    'btn_update' => 'Update',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items were selected.',
    'flash_create_success' => 'Item "%name%" has been successfully created.',
    'flash_create_error' => 'An error has occurred during the creation of item "%name%".',
    'flash_edit_success' => 'Item "%name%" has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during update of item "%name%".',
    'flash_lock_error' => 'Another user has modified item "%name%". Please %link_start%click here%link_end% to reload the page and apply the changes again.',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during deletion of item "%name%".',
    'flash_delete_success' => 'Item "%name%" has been deleted successfully.',
    'form_not_available' => 'Form is not available.',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected "%object%" element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action \'%action%\'',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_compare' => 'Compare',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'td_role' => 'Role',
    'label_view_revision' => 'View Revision',
    'label_compare_revision' => 'Compare revision',
    'list_results_count_prefix' => 'at least',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
    'label_per_page' => 'Per page',
    'list_select' => 'List select',
    'confirm_exit' => 'Confirm exit',
    'link_edit_acl' => 'Edit ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'Success! ACL edited.',
    'link_action_acl' => 'List actions with ACL',
    'short_object_description_placeholder' => 'Short object description',
    'title_search_results' => 'Search results',
    'search_placeholder' => 'Search',
    'no_results_found' => 'No results found',
    'add_new_entry' => 'Add new entry',
    'link_actions' => 'List actions',
    'noscript_warning' => 'Javascript is disabled in your web browser. Some features will not work properly.',
    'message_form_group_empty' => 'No fields available.',
    'link_filters' => 'Filters',
    'stats_view_more' => 'View more',
    'title_select_subclass' => 'Select object type',
    'no_subclass_available' => 'No object types available',
    'label_unknown_user' => 'unknown',
    'group.user' => 'User',
  ),
  'ApplicationSonataAdminBundle' => 
  array (
    'security.login.label' => 'Authentication',
  ),
  'messages' => 
  array (
    'label.user' => 'User',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
