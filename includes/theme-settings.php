<?php

function mytheme_settings_page()
{
    $my_option = get_option('my_data');

    $font_color = '';
    $font_family = '';
    $disable_logo = '';

    if (
        is_array($my_option) && isset($my_option['font_color']) && isset($my_option['font_family']) && isset($my_option['disable_logo'])
    ) {

        $font_color = $my_option['font_color'];
        $font_family = $my_option['font_family'];
        $disable_logo = $my_option['disable_logo'];
    }

    if (isset($_POST['save_btn']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        $font_family = isset($_POST['font_family']) ? sanitize_text_field($_POST['font_family']) : '';
        $font_color = isset($_POST['font_color']) ? sanitize_text_field($_POST['font_color']) : '';
        $disable_logo = isset($_POST['disable_logo']) ? 1 : 0;


        update_option('my_data', array(
            'font_family' => $font_family,
            'font_color' => $font_color,
            'disable_logo' => $disable_logo,

        ));
    }


?>
    <div class="theme_settings">
        <h1>IcodeGuru Theme 1.0</h1>
    </div>
    <div class="wrap">
        <form action="" method="post" id="my-form">

            <label for="myfont">Font Family</label>
            <input type="text" id="myfont" name="font_family" value="<?php echo esc_attr($font_family);  ?>">

            <label for="fontcolor">Font Color</label>
            <input type="text" id="fontcolor" name="font_color" value="<?php echo esc_attr($font_color);  ?>">

            <label for="disablelogo">Disable Logo</label>
            <input type="checkbox" id="disablelogo" name="disable_logo" <?php if ($disable_logo) echo 'checked' ?>>

            <button type="submit" value="save" class="btn btn-primary" name="save_btn">Save</button>

        </form>
    </div>
<?php
}
