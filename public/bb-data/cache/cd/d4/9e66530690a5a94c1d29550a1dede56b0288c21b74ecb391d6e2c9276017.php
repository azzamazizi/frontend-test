<?php

/* mod_client_profile.phtml */
class __TwigTemplate_cdd49e66530690a5a94c1d29550a1dede56b0288c21b74ecb391d6e2c9276017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Profile details");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 8
        $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
        // line 9
        echo "
<div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-profile\"></span></div>
            <h2>";
        // line 13
        echo gettext("Profile details");
        echo "</h2>
            <p>";
        // line 14
        echo gettext("Keep your profile up to date");
        echo "</p>
        </div>
    <div class=\"block conversation\">
        <div class=\"widget simpleTabs tabsRight first\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-profile\">";
        // line 19
        echo gettext("Manage profile");
        echo "</h2>
        </div>
        <ul class=\"tabs\">
            <li><a href=\"#tab-details\"><span class=\"dark-icon i-profile\"></span>";
        // line 22
        echo gettext("Details");
        echo "</a></li>
            <li><a href=\"#tab-password\"><span class=\"dark-icon i-logout\"></span>";
        // line 23
        echo gettext("Change Password");
        echo "</a></li>
            <li><a href=\"#tab-gravatar\"><span class=\"dark-icon i-uncheck\"></span>";
        // line 24
        echo gettext("Gravatar");
        echo "</a></li>
            <li><a href=\"#tab-currency\"><span class=\"dark-icon i-payment\"></span>";
        // line 25
        echo gettext("Currency");
        echo "</a></li>
            <li><a href=\"#tab-api\"><span class=\"dark-icon i-logout\"></span>";
        // line 26
        echo gettext("API");
        echo "</a></li>
        </ul>
        <div class=\"tabs_container\">

            <div class=\"tab_content\" id=\"tab-details\">
                <form method=\"post\" action=\"\" id=\"profile-update\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <h2>";
        // line 34
        echo gettext("Update profile");
        echo "</h2>
                        <div class=\"block\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 38
        echo gettext("Email Address");
        echo ": </label>
                                    <input type=\"email\" name=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 42
        echo gettext("First Name");
        echo ": </label>
                                    <input type=\"text\" name=\"first_name\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 46
        echo gettext("Last Name");
        echo ": </label>
                                    <input type=\"text\" name=\"last_name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 50
        echo gettext("Company Name");
        echo ": </label>
                                    <input type=\"text\" name=\"company\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company"), "html", null, true);
        echo "\">
                                </p>
                                <p>
                                    <label>";
        // line 54
        echo gettext("Phone Country Code");
        echo ": </label>
                                    <input type=\"text\" name=\"phone_cc\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "phone_cc"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 58
        echo gettext("Phone Number");
        echo ": </label>
                                    <input type=\"text\" name=\"phone\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "phone"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 61
        echo gettext("Update profile");
        echo "\">
                            </fieldset>
                        </div>
                        </div>
                </div>
                <div class=\"grid_6 omega\">
                    <div class=\"box\">
                        <h2>&nbsp;</h2>
                        <div class=\"block\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 72
        echo gettext("Address");
        echo ": </label>
                                    <input type=\"text\" name=\"address_1\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address_1"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 76
        echo gettext("Address 2");
        echo ": </label>
                                    <input type=\"text\" name=\"address_2\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address_2"), "html", null, true);
        echo "\">
                                </p>
                                <p>
                                    <label>";
        // line 80
        echo gettext("City");
        echo ": </label>
                                    <input type=\"text\" name=\"city\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "city"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 84
        echo gettext("Country");
        echo ": </label>
                                    ";
        // line 85
        echo $context["mf"]->getselectbox("country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "country"), 1, "Select country");
        echo "
                                </p>
                                <p>
                                    <label>";
        // line 88
        echo gettext("State");
        echo ": </label>
                                     ";
        // line 90
        echo "                                     <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "state"), "html", null, true);
        echo "\" />
                                </p>
                                <p>
                                    <label>";
        // line 93
        echo gettext("Zip/Postal Code");
        echo ": </label>
                                    <input type=\"text\" name=\"postcode\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "postcode"), "html", null, true);
        echo "\" required=\"required\">
                                </p>
                            </fieldset>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class=\"tab_content\" id=\"tab-password\">
                <div class=\"box\">
                    <h2>";
        // line 105
        echo gettext("Change password");
        echo "</h2>
                    <div class=\"block\">
                        <form method=\"post\" action=\"\" id=\"change-password\">
                            <fieldset>
                                <legend>";
        // line 109
        echo gettext("Enter new password");
        echo "</legend>
                                <p>
                                    <label>";
        // line 111
        echo gettext("Password");
        echo ": </label>
                                    <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                </p>
                                <p>
                                    <label>";
        // line 115
        echo gettext("Password confirm");
        echo ": </label>
                                    <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 118
        echo gettext("Change password");
        echo "\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class=\"tab_content\" id=\"tab-api\">
                <div class=\"box\">
                    <h2>";
        // line 127
        echo gettext("API key");
        echo "</h2>
                    <p>";
        // line 128
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
                    <p>";
        // line 129
        echo gettext("Warning! Resetting the key will break existing applications using it.");
        echo "</p>
                    <div class=\"block\">
                        <form method=\"post\" action=\"\" id=\"change-api-key\">
                            <fieldset>
                                <p>
                                    <label>";
        // line 134
        echo gettext("Your API key");
        echo ": </label>
                                    <input type=\"text\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_api_key_get"), "html", null, true);
        echo "\" id=\"api-key\">
                                </p>
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 137
        echo gettext("Reset key");
        echo "\">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class=\"tab_content\" id=\"tab-gravatar\">
                <div class=\"box\">
                    <h2>";
        // line 146
        echo gettext("Gravatar");
        echo "</h2>
                    <div class=\"block\">
                        <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email")), "html", null, true);
        echo "\" alt=\"Gravatar\" style=\"float: left; padding: 1px; margin-right: 10px; border: 1px solid #d1d1d1;\"/>
                        <p>";
        // line 149
        echo gettext("Please register with");
        echo " <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
        echo "</b> ";
        echo gettext("at ");
        echo "<a target=\"_blank\" href=\"http://gravatar.com\">Gravatar.com</a> ";
        echo gettext("to change your profile image. Gravatar image updates may not appear immediately.");
        echo "</p>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>

            <div class=\"tab_content\" id=\"tab-currency\">
                <div class=\"box\">
                    <h2>";
        // line 157
        echo gettext("Currency");
        echo "</h2>
                    <div class=\"block\">
                        ";
        // line 159
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency")) {
            // line 160
            echo "                            <p>";
            echo gettext("Your profile currency is");
            echo " <em>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"), "html", null, true);
            echo "</em></p>
                            <p>";
            // line 161
            echo gettext("Create new client profile if you want to manage your money in other currency");
            echo "</p>
                        ";
        } else {
            // line 163
            echo "                            <p>";
            echo gettext("Your profile currency will be defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed.");
            echo "</p>
                        ";
        }
        // line 165
        echo "                    </div>
                </div>
            </div>

            <div class=\"clear\"></div>
        </div>
        </div>
    </div>
</div>

";
    }

    // line 177
    public function block_js($context, array $blocks = array())
    {
        // line 178
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#change-password').bind('submit',function(event){
        bb.post(
            'client/client/change_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password was changed');
            }
        );
        return false;
    });
    
    \$('#change-api-key').bind('submit',function(event){
        bb.post(
            'client/client/api_key_reset',
            \$(this).serialize(),
            function(result) {
                \$('#api-key').val(result);
                bb.msg('API key was changed');
            }
        );
        return false;
    });

    \$('#profile-update').bind('submit',function(event){
        bb.post(
            'client/client/update',
            \$(this).serialize(),
            function(result) {
                bb.msg('Profile updated');
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 178,  383 => 177,  369 => 165,  363 => 163,  358 => 161,  351 => 160,  349 => 159,  344 => 157,  327 => 149,  323 => 148,  318 => 146,  306 => 137,  301 => 135,  297 => 134,  289 => 129,  285 => 128,  281 => 127,  269 => 118,  263 => 115,  256 => 111,  251 => 109,  244 => 105,  230 => 94,  226 => 93,  219 => 90,  215 => 88,  209 => 85,  205 => 84,  199 => 81,  195 => 80,  189 => 77,  185 => 76,  179 => 73,  175 => 72,  161 => 61,  156 => 59,  152 => 58,  146 => 55,  142 => 54,  136 => 51,  132 => 50,  126 => 47,  122 => 46,  116 => 43,  112 => 42,  106 => 39,  102 => 38,  95 => 34,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  62 => 19,  54 => 14,  50 => 13,  44 => 9,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  28 => 3,);
    }
}
