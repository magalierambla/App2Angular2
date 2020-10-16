<?php
$css_paths = explode(",", addslashes($_GET['css_paths']));

/* language */

if (file_exists('langs/' . $_GET['language'] . '.php')) {
    require_once 'langs/' . $_GET['language'] . '.php';
} else { // default
    require_once 'langs/en_EN.php';
}
if (isset($_GET['btnCode'])) {
    $btnCode  = urldecode($_GET['btnCode']);
    $btnIcon  = urldecode($_GET['btnIcon']);
    $btnStyle = urldecode($_GET['btnStyle']);
    $btnSize  = urldecode($_GET['btnSize']);
    $btnTag   = urldecode($_GET['btnTag']);
    $btnHref  = urldecode($_GET['btnHref']);
    $btnType  = urldecode($_GET['btnType']);
    $btnText  = urldecode($_GET['btnText']);
    $iconPos  = urldecode($_GET['iconPos']);
} else {
    $btnCode  = '<button type="button" class="btn btn-primary" id="btn-test">' . MY_FANTASTIC_BUTTON . '</button>';
    $btnIcon  = 'glyphicon-none';
    $btnStyle = 'btn-primary';
    $btnSize  = '';
    $btnTag   = 'button';
    $btnHref  = '#';
    $btnType  = 'button';
    $btnText  = MY_FANTASTIC_BUTTON;
    $iconPos  = 'prepend';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php
foreach ($css_paths as $css_path) {
    echo '<link rel="stylesheet" href="' . trim($css_path) . '">' . " \n";
}
?>
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="css/bootstrap-iconpicker.min.css">
    <link href="google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container">
        <div class="row margin-bottom-md">
            <div class="choice-title">
                <span><?php echo BUTTON_STYLE; ?></span>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-default" data-attr="btn-default">default</button>
                    </div>
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-primary" data-attr="btn-primary">primary</button>
                    </div>
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-success" data-attr="btn-success">success</button>
                    </div>
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-info" data-attr="btn-info">info</button>
                    </div>
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-warning" data-attr="btn-warning">warning</button>
                    </div>
                    <div class="choice selector select-style">
                        <button type="button" class="btn btn-danger" data-attr="btn-danger">danger</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-bottom-md">
            <div class="choice-title">
                <span><?php echo BUTTON_SIZE; ?></span>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <div class="choice selector select-size">
                        <button type="button" class="btn <?php echo $btnStyle; ?> btn-xs" data-attr="btn-xs">extra-small</button>
                    </div>
                    <div class="choice selector select-size">
                        <button type="button" class="btn <?php echo $btnStyle; ?> btn-sm" data-attr="btn-sm">small</button>
                    </div>
                    <div class="choice selector select-size">
                        <button type="button" class="btn <?php echo $btnStyle; ?>" data-attr="">medium</button>
                    </div>
                    <div class="choice selector select-size">
                        <button type="button" class="btn <?php echo $btnStyle; ?> btn-lg" data-attr="btn-lg">large</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-bottom-md">
            <div class="choice-title">
                <span><?php echo TAG; ?></span>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                <div id="button-select" class="choice selector select-tag" data-target="btn-input-type">
                    <span>&lt;button&gt;</span>
                </div>
                <div id="link-select" class="choice selector select-tag" data-target="btn-link">
                    <span>&lt;a&gt;</span>
                </div>
                <div id="input-select" class="choice selector select-tag" data-target="btn-input-type">
                    <span>&lt;input&gt;</span>
                </div>
            </div>
            <div class="col-sm-6 target-wrapper">
                <div id="btn-link" class="target">
                    <?php echo LINK; ?> : <input type="text" name="btn-link-text" value="<?php echo $btnHref; ?>" placeholder="http://">
                </div>
                <div id="btn-input-type" class="target">
                    <div class="form-group margin-bottom-zero">
                          <label class="radio-inline">
                            <input type="radio" name="options-input-type" value="button">
                            button
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="options-input-type" value="submit">
                            submit
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="options-input-type" value="cancel">
                            cancel
                          </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="choice-title">
                <span><?php echo OTHERS; ?></span>
            </div>
            <div class="text-center">
                <div class="choice">
                    <label><?php echo DISABLED; ?> : </label>
                    <div class="btn-group btn-toggle" id="disabled">
                        <button class="btn btn-sm btn-success active" data-attr="false"><?php echo NO; ?></button>
                        <button class="btn btn-sm btn-default" data-attr="true"><?php echo YES; ?></button>
                    </div>
                </div>
                <div class="choice">
                    <label><?php echo WIDTH; ?> 100% : </label>
                    <div class="btn-group btn-toggle" id="width100">
                        <button class="btn btn-sm btn-success active" data-attr="false"><?php echo NO; ?></button>
                        <button class="btn btn-sm btn-default" data-attr="true"><?php echo YES; ?></button>
                    </div>
                </div>
                <div class="choice">
                    <div id="btn-text" class="autoheight margin-bottom-md form-inline form-group">
                        <label id="text-label"><?php echo TEXT; ?> :</label> <input type="text"  class="form-control" name="btn-text" value="<?php echo $btnText; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-warning text-center" id="disabled-warning">
            <span class="glyphicon glyphicon-warning-sign"></span> <?php echo DISABLED_ELEMENTS_WILL_NOT_BE_EDITABLE_IN_TINYMCE_EDITOR; ?>
        </div>
        <div class="row margin-bottom-md" id="icon-choice">
            <div class="text-center">
                <div class="choice">
                    <?php echo ICON; ?> :
                    <button class="btn btn-default" id="iconpicker"></button>
                </div>
                <div class="choice">
                    <label class="radio-inline">
                        <input type="radio" name="icon-pos" value="prepend">
                        <?php echo PREPEND; ?>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="icon-pos" value="append">
                        <?php echo APPEND; ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="row" id="preview">
            <div id="preview-title" class="margin-bottom-md">
                <span class="btn-primary"><?php echo PREVIEW; ?></span>
            </div>
            <div class="col-sm-12 text-center margin-bottom-md" id="test-wrapper">
                <?php echo $btnCode ?>
            </div>
        </div>
        <div class="row">
            <div id="code-title">
                <a href="#"><?php echo CODE; ?> <i class="glyphicon glyphicon-arrow-down"></i></a>
            </div>
            <div class="col-sm-12" id="code-wrapper">
                <pre><?php
                    echo htmlspecialchars($btnCode);
                    ?></pre>
            </div>
        </div>
    </div>
<script type="text/javascript">
    //  Get Parent jQuery Variable
    var args = top.tinymce.activeEditor.windowManager.getParams();
    var $ = args['jquery'];
    var jQuery = args['jquery'];

    //  Get Current Context for jQuery
    var context = document.getElementsByTagName("body")[0];
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/utils.min.js"></script>
<script type="text/javascript" src="js/jquery.htmlClean.min.js"></script>
<script type="text/javascript" src="js/iconset/iconset-glyphicon.min.js"></script>
<script type="text/javascript" src="js/bootstrap-iconpicker.min.js"></script>
<script type="text/javascript" src="google-code-prettify/prettify.js"></script>
<script type="text/javascript">
    var btnCode  = '<?php echo $btnCode; ?>';
    var btnIcon  = '<?php echo $btnIcon; ?>';
    var btnStyle = '<?php echo $btnStyle; ?>';
    var btnSize  = '<?php echo $btnSize; ?>';
    var btnTag   = '<?php echo $btnTag; ?>';
    var btnHref  = '<?php echo $btnHref; ?>';
    var btnType  = '<?php echo $btnType; ?>';
    var btnText  = '<?php echo $btnText; ?>';
    var iconPos  = '<?php echo $iconPos; ?>';
    var btnWidth = '';
    $(document).ready(function () {

        $('#code-wrapper', context).hide();
        getBootstrapStyles();

        /* add ID to button test if btn code has been received from php */

        if (!$('#test-wrapper #btn-test', context)[0]) {
            $('#test-wrapper .btn', context).attr('id', 'btn-test');
        }

        btnWidth = $('#btn-test', context).outerWidth();
        $('#btn-link', context).hide();
        $('#disabled-warning', context).hide();
        $('#iconpicker', context).iconpicker({
            arrowClass: 'btn-success',
            arrowPrevIconClass: 'glyphicon glyphicon-chevron-left',
            arrowNextIconClass: 'glyphicon glyphicon-chevron-right',
            icon: btnIcon,
            iconset: 'glyphicon',
            labelHeader: '<?php echo ZERO_OF_1_PAGES; ?>',
            labelFooter: '<?php echo ZERO_1_OF_2_ICONS; ?>',
            placement: 'top',
            rows: 6,
            cols: 18,
            search: false,
            selectedClass: 'btn-success',
            unselectedClass: ''
        }).on('change', function (e) {
            changeBtnText();
        });

        /* button style */

        $('.selector.select-style', context).each(function (event, element) {

            /* set style on load */

            if ($(element).find('button').hasClass(btnStyle)) {
                $(element).addClass('active');
            }

            $(element).on('click', function (event) {
                $('.selector.select-style', context).removeClass('active');
                $(this).addClass('active');
                $('#btn-test', context).removeClass(btnStyle);
                $('.selector.select-size button', context).removeClass(btnStyle);
                btnStyle = $(this).find('button').attr('data-attr');
                $('#btn-test', context).addClass(btnStyle);
                $('.selector.select-size button', context).addClass(btnStyle);
                updateCode();
            });
        });

        /* button size */

        $('.selector.select-size', context).each(function (event, element) {

            /* set size on load */

            if ($(element).find('button').hasClass(btnSize)) {
                $(element).addClass('active');
            }

            $(element).on('click', function (event) {
                $('.selector.select-size', context).removeClass('active');
                $(this).addClass('active');
                $('#btn-test', context).removeClass(btnSize);
                btnSize = $(this).find('button').attr('data-attr');
                $('#btn-test', context).addClass(btnSize);
                btnWidth = $('#btn-test', context).outerWidth();
                updateCode();
            });
        });

        /* set default size active on load if no other activated */

        if (!$('.selector.select-size.active', context)[0]) {
            $('.selector.select-size > button[data-attr=""]', context).parent().addClass('active');
        }

        /* button tag */

        $('.selector.select-tag', context).each(function (event, element) {

            /* set tag on load */

            if (btnTag == 'button' && $(element).attr('id') == 'button-select') {
                $(element).addClass('active');
            } else if (btnTag == 'a' && $(element).attr('id') == 'link-select') {
                $(element).addClass('active');
                $('.target', context).each(function () {
                    if ($(this).css('display') == 'block') {
                        $(this).fadeOut(200).removeClass('active');
                    }
                }).promise().done(function () {
                    $('#btn-link', context).fadeIn(200);
                $('#btn-link', context).addClass('active');
                });
            } else if (btnTag == 'input' && $(element).attr('id') == 'input-select') {
                $(element).addClass('active');
                $('#text-label', context).text('<?php echo VALUE; ?> : ');
            }

            $(element).on('click', function (event) {
                var target = $(this).attr('data-target');

                /* add/remove active class */

                $('.selector.select-tag', context).removeClass('active');
                $(this).addClass('active');

                /* show/hide target */

                if (!$('#' + target, context).hasClass('active')) {
                    $('.target', context).each(function () {
                        if ($(this).css('display') == 'block') {
                            $(this).fadeOut(200).removeClass('active');
                        }
                    }).promise().done(function () {
                        $('#' + target, context).fadeIn(200);
                        $('#' + target, context).addClass('active');
                    });
                }

                /* change button test tag */

                changeBtnTag(target);
            });
        });

        /* set type on load */

        $('input[name="options-input-type"]', context).each(function () {
            if ($(this).val() == btnType) {
                $(this).attr('checked', true);
            }
        });

        /* set icon position on load */

        $('input[name="icon-pos"]', context).each(function () {
            if ($(this).val() == iconPos) {
                $(this).attr('checked', true);
            }
        });

        $('input[name="options-input-type"]', context).on('change', function () {
            changeBtnTag('btn-input-type');
        });
        $('#btn-text', context).on('keyup', changeBtnText);
        $('input[name="btn-link-text"]', context).on('keyup', changeBtnLink);
        $('#disabled', context).on('click', changeBtnState);
        $('#width100', context).on('click', changeBtnWidth);

        /* set width100 on load */

        if ($('#btn-test', context).hasClass('btn-block')) {
            $('#width100', context).trigger('click');
        }
        $('input[name="icon-pos"]', context).on('change', changeBtnText);
        updateCode();
    });

    /* change button test tag */

    function changeBtnTag(target)
    {
        var btnClass = $('#btn-test', context).attr('class');
        var btnType = $('input[name="options-input-type"]:checked', context).val();
        var link;
        var html;
        if ($('#btn-test', context).is('input')) {
            btnText = $('#btn-test', context).prop('value');
        } else {
            btnText = $('#btn-test', context).html();
        }
        if (target == 'btn-link') {
            link = $('input[name="btn-link-text"]', context).val();
            if (link === '') {
                link = '#';
            }
            html = '<a href="' + link + '" class="' + btnClass + '" id="btn-test"></a>';
            $('#text-label', context).text('text : ');
            $('#iconpicker', context).removeAttr('disabled');
        } else if (target == 'btn-input-type') {                    // button or input
            if ($('#input-select', context).hasClass('active')) {            // input
                html = '<input type="' + btnType + '" class="' + btnClass + '" id="btn-test" value="">';
                $('#text-label', context).text('<?php echo VALUE; ?> : ');
                $('#iconpicker', context).attr('disabled', true);
            } else if ($('#button-select', context).hasClass('active')) {    // button
                html = '<button type="' + btnType + '" class="' + btnClass + '" id="btn-test"></button>';
                $('#text-label', context).text('text : ');
                $('#iconpicker', context).removeAttr('disabled');
            }
        }
        $('#test-wrapper', context).html(html);
        changeBtnText();
    }

    /* change button test link */

    function changeBtnLink()
    {
        var link = $('input[name="btn-link-text"]', context).val();
        if (link === '') {
            link = '#';
        }
        $('#btn-test', context).attr('href', link);
        updateCode();
    }

    /* change button state (enabled/disabled) */

    function changeBtnState()
    {
        var checked = toggleBtn(this);
        if (checked) {
            $('#btn-test', context).attr('disabled', true);
            $('#disabled-warning', context).show(500);
        } else {
            $('#btn-test', context).removeAttr('disabled');
            $('#disabled-warning', context).hide(500);
        }
        updateCode();
    }

    /* change button width (class btn-block) */

    function changeBtnWidth()
    {
        var wrapperWidth = $('#test-wrapper', context).width;
        var checked = toggleBtn(this);
        $('#test-wrapper', context).addClass('no-transition');
        if (checked) {
            btnWidth = $('#btn-test', context).outerWidth();
            $('#btn-test', context).css('width', btnWidth + 'px').addClass('btn-block').animate({'width': '100%'}, 500, function () {
                $(this).css({'width': '', 'overflow': ''});
                updateCode();
                $('#test-wrapper', context).removeClass('no-transition');
            });
        } else {
            $('#btn-test', context).css('width', '100%').removeClass('btn-block').animate({'width': btnWidth + 'px'}, 500, function () {
                $(this).css({'width': '', 'overflow': ''});
                updateCode();
                $('#test-wrapper', context).removeClass('no-transition');
            });
        }
    }

    /* change button width (class btn-block) */

    function changeBtnText()
    {
        btnText = $('input[name="btn-text"]', context).prop('value');
        btnIcon = $('#iconpicker', context).find('input[type="hidden"]').prop('value');
        iconPos = $('input[name="icon-pos"]:checked', context).val();
        if ($('#btn-test', context).is('input')) {
            $('#btn-test', context).attr('value', btnText);
        } else {
            if (btnIcon == 'glyphicon-none') {
                $('#btn-test', context).html(btnText);
            } else {
                if (iconPos == 'prepend') {
                    $('#btn-test', context).html('<span class="glyphicon ' + btnIcon + '"></span> ' + btnText);
                } else {
                    $('#btn-test', context).html(btnText + ' <span class="glyphicon ' + btnIcon + '"></span>');
                }
            }
        }
        updateCode();
    }
</script>
</body>
</html>
