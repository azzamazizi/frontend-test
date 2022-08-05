<?php

/* mod_order_settings.phtml */
class __TwigTemplate_c1902f925fb5011ac03e6b9a5550ce1a23dafe3876b08bcb19ebcc683eb6915c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Orders settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Orders settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("Orders settings");
        echo "</h5>
    </div>

    ";
        // line 21
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_order")), "method");
        // line 22
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 25
        echo gettext("Expiration date");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_expiration_date\" ";
        // line 27
        if ((($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_expiration_date") || (!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic")))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last order expiration date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_today\" ";
        // line 29
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_today")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from renewal (payment) date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_greater\" ";
        // line 31
        if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "order_renewal_logic") == "from_greater")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last expiration date or renewal date whichever is greater</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 37
        echo gettext("Show addon orders in orders list (if this is disabled they are shown in master order view \"Addons\" tab)");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"show_addons\" value=\"1\"";
        // line 39
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "show_addons")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"show_addons\" value=\"0\"";
        // line 40
        if ((!$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "show_addons"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 46
        echo gettext("Auto suspend reason");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"batch_suspend_reason\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_suspend_reason"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 54
        echo gettext("Auto Cancellation");
        echo "</label>
            <div class=\"formRight moreFields\">
                <ul>
                    <li class=\"sep txt\">
                        <select name=\"batch_cancel_suspended\">
                            <option value=\"1\" ";
        // line 59
        echo (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_cancel_suspended")) ? ("selected") : (""));
        echo ">Cancel Suspended Orders</option>
                            <option value=\"0\" ";
        // line 60
        echo (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_cancel_suspended")) ? ("") : ("selected"));
        echo ">Do Not Cancel Suspended Orders</option>
                        </select>
                    </li>
                    <li class=\"sep\" style=\"width: 45px\"><input type=\"text\" name=\"batch_cancel_suspended_after_days\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_cancel_suspended_after_days"), "html", null, true);
        echo "\" placeholder=\"7\"/></li>
                    <li class=\"sep txt\"> days after order suspension with reason</li>
                    <li class=\"sep\" style=\"width: 30%\"><input type=\"text\" name=\"batch_cancel_suspended_reason\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "batch_cancel_suspended_reason"), "html", null, true);
        echo "\" placeholder=\"\"/></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>

            <div class=\"rowElem\">
                <label>";
        // line 72
        echo gettext("Suspension reasons");
        echo "</label>
                <div class=\"formRight\">
                    <textarea name=\"suspend_reason_list\" rows=\"10\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "suspend_reason_list"), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>


            <input type=\"hidden\" name=\"ext\" value=\"mod_order\" />
        <input type=\"submit\" value=\"";
        // line 81
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_order_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 81,  194 => 74,  189 => 72,  179 => 65,  174 => 63,  168 => 60,  164 => 59,  156 => 54,  147 => 48,  142 => 46,  129 => 40,  121 => 39,  116 => 37,  105 => 31,  98 => 29,  91 => 27,  86 => 25,  79 => 22,  77 => 21,  71 => 18,  66 => 15,  63 => 14,  56 => 10,  50 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
