<?php

/* mod_staff_manage.phtml */
class __TwigTemplate_fa752ee08f953f362154c395a90c09102627d72bd30a74f27a840ca9b8363317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Profile");
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/staff");
        echo "\">";
        echo gettext("Staff");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
";
        // line 18
        if (($this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "role") == "cron")) {
            // line 19
            echo "<div class=\"nNote nInformation hideit first\">
    <p><strong>";
            // line 20
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo gettext("This staff member is used by BoxBilling to perform system tasks and can not be removed.");
            echo "</p>
</div>
";
        }
        // line 23
        echo "
<!-- Full width tabs --> 
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">";
        // line 27
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-permissions\">";
        // line 28
        echo gettext("Permissions");
        echo "</a></li>
        <li><a href=\"#tab-password\">";
        // line 29
        echo gettext("Password");
        echo "</a></li>
        <li><a href=\"#tab-api\">";
        // line 30
        echo gettext("API");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>";
        // line 37
        echo gettext("Manage staff member details");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/update\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 40
        echo gettext("This staff member updated.");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 43
        echo gettext("Group");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "admin_group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "staff_group_get_pairs"), 2 => $this->getAttribute($this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "group"), "id"), 3 => 1), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"name\">";
        // line 50
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "name"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"email\">";
        // line 57
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>  
                    <div class=\"rowElem\">
                        <label>";
        // line 64
        echo gettext("Status");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 66
        if (($this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Active</label>
                            <input type=\"radio\" name=\"status\" value=\"inactive\"";
        // line 67
        if (($this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "status") == "inactive")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Inactive</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"signature\">";
        // line 72
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "id"), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 79
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-permissions\" class=\"tab_content nopadding\">
            <div class=\"help\">
                ";
        // line 86
        $context["member_name"] = $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "name");
        // line 87
        echo "                <h3>";
        echo strtr(gettext("%member_name% permissions"), array("%member_name%" => (isset($context["member_name"]) ? $context["member_name"] : null), ));
        echo "</h3>
            </div>
            
            ";
        // line 90
        if (($this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "role") == "admin")) {
            // line 91
            echo "            <div class=\"body\">
                <p>";
            // line 92
            echo gettext("Administrator account is allowed to do everything");
            echo "</p>
            </div>
            ";
        } else {
            // line 95
            echo "            ";
            $context["prms"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "staff_permissions_get", array(0 => array("id" => $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "id"))), "method");
            // line 96
            echo "            <form method=\"post\" action=\"admin/staff/permissions_update\" class=\"mainForm api-form\" data-api-msg=\"";
            echo gettext("Permissions updated");
            echo "\">
            <input type=\"hidden\" name=\"permissions[]\" value=\"\">
                
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>";
            // line 105
            echo gettext("Module");
            echo "</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mods"]) ? $context["mods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mod"]) {
                // line 111
                echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"permissions[";
                // line 113
                echo twig_escape_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null), "html", null, true);
                echo "]\" value=\"1\" class=\"perm\" ";
                if ($this->getAttribute((isset($context["prms"]) ? $context["prms"] : null), (isset($context["mod"]) ? $context["mod"] : null), array(), "array")) {
                    echo "checked=\"checked\"";
                }
                echo "/> 
                    </td>
                    <td>";
                // line 115
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["mod"]) ? $context["mod"] : null)), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                </tbody>
                
                <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "id"), "html", null, true);
            echo "\">
                        <input type=\"submit\" value=\"";
            // line 124
            echo gettext("Save");
            echo "\" class=\"greyishBtn\" />
                    </td>
                </tr>
                </tfoot>
            </table>
            </form>
            ";
        }
        // line 131
        echo "        </div>
            
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 135
        echo gettext("Change staff member password");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/change_password\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 138
        echo gettext("Staff member password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label for=\"password\">";
        // line 141
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"password_confirm\">";
        // line 148
        echo gettext("Repeat same password");
        echo "</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password_confirm\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "id"), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 156
        echo gettext("Submit");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-api\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 163
        echo gettext("Api key is used to manage system via other interfaces.");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/profile/generate_api_key\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 169
        echo gettext("API key");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "profile_get"), "api_token"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staff"]) ? $context["staff"] : null), "id"), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 176
        echo gettext("Generate new key");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

";
    }

    // line 188
    public function block_js($context, array $blocks = array())
    {
        // line 189
        echo "<script type=\"text/javascript\">

\$(function() {
    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});
    
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 189,  397 => 188,  383 => 176,  379 => 175,  372 => 171,  367 => 169,  358 => 163,  348 => 156,  344 => 155,  334 => 148,  324 => 141,  318 => 138,  312 => 135,  306 => 131,  296 => 124,  292 => 123,  285 => 118,  276 => 115,  267 => 113,  263 => 111,  259 => 110,  251 => 105,  238 => 96,  235 => 95,  229 => 92,  226 => 91,  224 => 90,  217 => 87,  215 => 86,  205 => 79,  201 => 78,  194 => 74,  189 => 72,  179 => 67,  173 => 66,  168 => 64,  160 => 59,  155 => 57,  147 => 52,  142 => 50,  134 => 45,  129 => 43,  123 => 40,  117 => 37,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  89 => 23,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  70 => 16,  63 => 12,  57 => 11,  51 => 10,  45 => 9,  42 => 8,  39 => 7,  33 => 3,  28 => 4,);
    }
}
