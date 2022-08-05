<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_4c42d0c673c03bef8add9dce0a26ab4eda05f5454d66afb1605e7c3e5d75028d extends Twig_Template
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
        // line 4
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Client Area");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"dashboard\">
";
        // line 8
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 9
            echo "
";
            // line 10
            $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method");
            // line 11
            if (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "total") > 0)) {
                // line 12
                echo "    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
                // line 14
                echo gettext("Tickets waiting your reply");
                echo "</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>";
                // line 19
                echo gettext("Id");
                echo "</th>
                    <th>";
                // line 20
                echo gettext("Subject");
                echo "</th>
                    <th>";
                // line 21
                echo gettext("Help desk");
                echo "</th>
                    <th>";
                // line 22
                echo gettext("Status");
                echo "</th>
                    <th>";
                // line 23
                echo gettext("Submitted");
                echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 29
                    echo "
                <tr class=\"";
                    // line 30
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">
                    <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "</td>
                    <td><a href=\"";
                    // line 32
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
                    echo "</a></td>
                    <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 34
                    echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
                    echo "</td>
                    <td>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
                    echo "</td>
                </tr>

                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 39
                    echo "
                <tr>
                    <td colspan=\"5\">";
                    // line 41
                    echo gettext("The list is empty");
                    echo "</td>
                </tr>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "
            </tbody>
        </table>
    </div>
";
            }
            // line 50
            echo "
";
            // line 51
            $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
            // line 52
            echo "<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-profile\">";
            // line 55
            echo gettext("Profile");
            echo "</h2>
        </div>

        <table>
            <tbody>
                <tr>
                    <td>";
            // line 61
            echo gettext("ID");
            echo "</td>
                    <td>#";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "id"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 65
            echo gettext("Email");
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 69
            echo gettext("Balance");
            echo "</td>
                    <td>";
            // line 70
            echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 77
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
            echo "\">";
            echo gettext("Manage profile");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-invoice\">";
            // line 88
            echo gettext("Invoices");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 93
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 97
            echo gettext("Paid");
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "paid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 101
            echo gettext("Unpaid");
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "unpaid")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 109
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
            echo "\">";
            echo gettext("All Invoices");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-services\">";
            // line 120
            echo gettext("Services");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 125
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 129
            echo gettext("Active");
            echo "</td>
                    <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1, "status" => "active")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 133
            echo gettext("Soon expires");
            echo "</td>
                    <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("expiring" => 1)), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 141
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service");
            echo "\">";
            echo gettext("All services");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 142
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
            echo "\">";
            echo gettext("New order");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-support\">";
            // line 153
            echo gettext("Tickets");
            echo "</h2>
        </div>
        <table>
            <tbody>
                <tr>
                    <td>";
            // line 158
            echo gettext("Total");
            echo "</td>
                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 162
            echo gettext("Open");
            echo "</td>
                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "open")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td>";
            // line 166
            echo gettext("On Hold");
            echo "</td>
                    <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method"), "total"), "html", null, true);
            echo "</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <a class=\"bb-button\" href=\"";
            // line 174
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
            echo "\">";
            echo gettext("All tickets");
            echo "</a>
                        <a class=\"bb-button bb-button-submit\" href=\"";
            // line 175
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support", array("ticket" => 1));
            echo "\">";
            echo gettext("New ticket");
            echo "</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class=\"grid_6 alpha\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-order\">";
            // line 186
            echo gettext("Recent orders");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 190
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 191
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 192
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 193
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 196
                echo "                <tr>
                    <td colspan=\"3\">";
                // line 197
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "            </tbody>
        </table>
    </div>
</div>

<div class=\"grid_6 omega\">
    <div class=\"widget\">
        <div class=\"head\">
            <h2 class=\"dark-icon i-email\">";
            // line 208
            echo gettext("Recent emails");
            echo "</h2>
        </div>
        <table>
            <tbody>
                ";
            // line 212
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 213
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 214
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("email");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), 30), "html", null, true);
                echo "</a></td>
                    <td title=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo " ";
                echo gettext("ago");
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 218
                echo "                <tr>
                    <td colspan=\"2\">";
                // line 219
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "            </tbody>
        </table>
    </div>
</div>
<div class=\"clear\"></div>

";
        } else {
            // line 229
            echo "
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-order\"><a href=\"";
            // line 232
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order");
            echo "\">";
            echo gettext("Order");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 234
            echo gettext("Order products and services");
            echo "</p>
            </div>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-profile\"><a href=\"";
            // line 241
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/login", array("register" => 1));
            echo "\">";
            echo gettext("Register");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 243
            echo gettext("Become a member and manage services");
            echo "</p>
            </div>
        </div>
    </div>
    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-email\"><a href=\"";
            // line 249
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/support/contact-us");
            echo "\">";
            echo gettext("Contact Us");
            echo "</a></h2>
            <div class=\"block\">
                <p>";
            // line 251
            echo gettext("Contact us for more information");
            echo "</p>
            </div>
        </div>
    </div>

    ";
            // line 256
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
                // line 257
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-blog\"><a href=\"";
                // line 259
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
                echo "\">";
                echo gettext("Announcements");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 261
                echo gettext("Latest news & announcements");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 266
            echo "
    ";
            // line 267
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
                // line 268
                echo "    <div class=\"grid_6 alpha\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-kb\"><a href=\"";
                // line 270
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
                echo "\">";
                echo gettext("Knowledge Base");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 272
                echo gettext("Browse our KB for answers and FAQs");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 277
            echo "
    ";
            // line 278
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                // line 279
                echo "    <div class=\"grid_6 omega\">
        <div class=\"box\">
            <h2 class=\"big-dark-icon i-boxbilling\"><a href=\"http://www.boxbilling.com\">";
                // line 281
                echo gettext("Invoicing Software");
                echo "</a></h2>
            <div class=\"block\">
                <p>";
                // line 283
                echo gettext("Powered by BoxBilling invoicing software");
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 288
            echo "    <div class=\"clear\"></div>
";
        }
        // line 290
        echo "
</div>
";
    }

    // line 295
    public function block_js($context, array $blocks = array())
    {
        // line 296
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
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
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 296,  647 => 295,  641 => 290,  637 => 288,  629 => 283,  624 => 281,  620 => 279,  618 => 278,  615 => 277,  607 => 272,  600 => 270,  596 => 268,  594 => 267,  591 => 266,  583 => 261,  576 => 259,  572 => 257,  570 => 256,  562 => 251,  555 => 249,  546 => 243,  539 => 241,  529 => 234,  522 => 232,  517 => 229,  508 => 222,  499 => 219,  496 => 218,  484 => 215,  476 => 214,  471 => 213,  466 => 212,  459 => 208,  449 => 200,  440 => 197,  437 => 196,  429 => 193,  421 => 192,  416 => 191,  411 => 190,  404 => 186,  388 => 175,  382 => 174,  372 => 167,  368 => 166,  362 => 163,  358 => 162,  352 => 159,  348 => 158,  340 => 153,  324 => 142,  318 => 141,  308 => 134,  304 => 133,  298 => 130,  294 => 129,  288 => 126,  284 => 125,  276 => 120,  260 => 109,  250 => 102,  246 => 101,  240 => 98,  236 => 97,  230 => 94,  226 => 93,  218 => 88,  202 => 77,  192 => 70,  188 => 69,  182 => 66,  178 => 65,  172 => 62,  168 => 61,  159 => 55,  154 => 52,  152 => 51,  149 => 50,  142 => 45,  132 => 41,  128 => 39,  119 => 35,  115 => 34,  111 => 33,  103 => 32,  99 => 31,  95 => 30,  92 => 29,  87 => 28,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  55 => 14,  51 => 12,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  25 => 4,);
    }
}
