<?php

/* mod_news_index.phtml */
class __TwigTemplate_74df16a0bb79b02518dc2f4ac80e5a10959c3dd94e4077d8ca012b45ea5ad126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        echo gettext("Blog");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-blog\"></span></div>
        <h2>";
        // line 9
        echo gettext("News & Announcements");
        echo "</h2>
        <p>";
        // line 10
        echo gettext("Track our latest posts");
        echo "</p>
    </div>
    <div class=\"block articles\">
    ";
        // line 13
        $context["posts"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "news_get_list", array(0 => array("page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "per_page" => 5)), "method");
        // line 14
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 15
            echo "        <div class=\"article";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " last";
            }
            echo "\">
            <h2><a href=\"";
            // line 16
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a></h2>
            ";
            // line 17
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 18
                echo "                ";
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"));
                echo "
            ";
            } else {
                // line 20
                echo "                ";
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content"));
                echo "
            ";
            }
            // line 22
            echo "            <p class=\"meta\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at")), "html", null, true);
            echo "</p>
            <a class=\"bb-button read_more\" href=\"";
            // line 23
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
            echo "\">";
            echo gettext("Read more..");
            echo "</a>
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "    <p>The list is empty</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    <div class=\"clear\"></div>
</div>

";
        // line 32
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null))));
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  139 => 32,  133 => 28,  126 => 26,  106 => 23,  101 => 22,  95 => 20,  89 => 18,  87 => 17,  79 => 16,  72 => 15,  53 => 14,  51 => 13,  45 => 10,  41 => 9,  36 => 6,  33 => 5,  27 => 3,);
    }
}
