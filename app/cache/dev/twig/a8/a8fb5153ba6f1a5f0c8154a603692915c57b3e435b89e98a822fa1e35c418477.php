<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_67da269b4db6207f140f5cb01404c00233b18de5d21aed120b9d15c84877fa1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "file", array()), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "line", array()));
            // line 7
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "method", array())) {
                // line 8
                echo "                <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "class", array()));
                echo "</span>
                <span class=\"sf-toolbar-info-method\"";
                // line 9
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo " onclick=\"window.location='";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "js"), "html", null, true);
                    echo "';window.event.stopPropagation();return false;\"";
                }
                echo ">
                    ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "method", array()), "html", null, true);
                echo "
                </span>
            ";
            } else {
                // line 13
                echo "                <span class=\"sf-toolbar-info-class\"";
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo " onclick=\"window.location='";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "js"), "html", null, true);
                    echo "';window.event.stopPropagation();return false;\"";
                }
                echo ">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "class", array()));
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()))) ? ("green") : ("yellow"))) : ("red"));
        // line 20
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array())) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array())) : ("NONE"));
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "        <svg width=\"28\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 28 28\" enable-background=\"new 0 0 28 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M19.5 18c0 0.2 0 0.5 0.1 0.8c-0.8 0.7-1.2 1.2-1.3 1.3c0 0 0 0.1 0 0.1c0.7 1 1.1 1.4 1.1 1.4 c0.1 0 0.3-0.1 0.8-0.3c0.4-0.2 0.8-0.4 0.9-0.5c0.1 0.1 0.3 0.1 0.3 0.2c0.1 0 0.2 0.1 0.4 0.1c0 0.2 0.1 0.6 0.3 1 c0.1 0.5 0.2 0.7 0.3 0.8c0 0 0.6-0.1 1.8-0.2c0 0 0.1 0 0.1-0.1c0.1-0.2 0.1-0.8 0.1-1.9c0.2-0.1 0.4-0.3 0.6-0.5 c1.2 0.4 1.8 0.5 1.9 0.4l0.7-1.6l0 0c0.1-0.1-0.5-0.5-1.6-1.1c0-0.3 0-0.5-0.1-0.8c0.8-0.7 1.2-1.2 1.3-1.3c0 0 0-0.1 0-0.1 c-0.7-0.9-1.1-1.4-1.1-1.4l-0.1 0c-0.5 0.2-1 0.5-1.6 0.8c-0.1-0.1-0.3-0.1-0.3-0.2c-0.1 0-0.2-0.1-0.4-0.1c0-0.2-0.1-0.6-0.3-1 c-0.1-0.5-0.2-0.7-0.3-0.8c0 0-0.2 0-0.4 0c-0.3 0-0.6 0.1-0.9 0.1c-0.3 0-0.5 0.1-0.5 0.1c0 0-0.1 0-0.1 0.1 c-0.1 0.2-0.1 0.8-0.1 1.9c-0.2 0.1-0.4 0.3-0.6 0.5c-1.2-0.4-1.8-0.5-1.9-0.4l-0.7 1.6C17.9 17 18.4 17.4 19.5 18z M22.2 16.5 c0.4-0.2 0.8-0.2 1.2 0c0.4 0.2 0.7 0.5 0.9 0.9c0.2 0.4 0.2 0.8 0 1.2c-0.2 0.4-0.5 0.7-0.9 0.9c-0.4 0.2-0.8 0.2-1.2 0 c-0.4-0.2-0.7-0.5-0.9-0.9c-0.2-0.4-0.2-0.8 0-1.2C21.4 17 21.7 16.7 22.2 16.5z\"/><path fill=\"#3F3F3F\" d=\"M18.9 11.2c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2l-2.2-0.3c-0.1-0.3-0.3-0.7-0.5-1.2 C16 9 16.2 8.7 16.5 8.3s0.5-0.6 0.6-0.8c0.1-0.1 0.1-0.2 0.1-0.3c0-0.3-0.7-1.1-2.1-2.4c-0.1-0.1-0.2-0.1-0.3-0.1 c-0.1 0-0.2 0-0.3 0.1l-1.7 1.3c-0.4-0.2-0.8-0.4-1.1-0.5l-0.3-2.3c0-0.1-0.1-0.2-0.1-0.3C11 3.1 10.9 3 10.8 3H8.1 C7.9 3 7.7 3.2 7.6 3.4C7.5 3.9 7.4 4.6 7.3 5.7C6.9 5.8 6.5 6 6.2 6.2L4.5 4.8C4.4 4.8 4.3 4.7 4.2 4.7C4 4.7 3.6 5 3 5.6 c-0.6 0.6-1 1-1.2 1.3C1.7 7 1.7 7.1 1.7 7.2c0 0.1 0 0.2 0.1 0.3c0.6 0.7 1 1.2 1.3 1.7C2.9 9.6 2.7 10 2.6 10.3l-2.3 0.4 c-0.1 0-0.2 0.1-0.2 0.2C0 10.9 0 11 0 11.1v2.7c0 0.1 0 0.2 0.1 0.3c0.1 0.1 0.2 0.1 0.3 0.1l2.2 0.4c0.1 0.4 0.3 0.8 0.5 1.2 c-0.2 0.2-0.4 0.5-0.7 0.9c-0.3 0.4-0.5 0.6-0.6 0.8c-0.1 0.1-0.1 0.2-0.1 0.3c0 0.3 0.7 1.1 2.1 2.4c0.1 0.1 0.2 0.1 0.3 0.1 c0.1 0 0.2 0 0.3-0.1l1.7-1.3c0.4 0.2 0.8 0.4 1.1 0.5l0.3 2.3c0 0.1 0.1 0.2 0.1 0.3C7.9 21.9 8 22 8.1 22h2.8 c0.2 0 0.4-0.1 0.4-0.4c0.1-0.5 0.2-1.2 0.3-2.3c0.4-0.1 0.8-0.3 1.1-0.5l1.7 1.3c0.1 0.1 0.2 0.1 0.3 0.1c0.2 0 0.6-0.3 1.2-0.9 c0.6-0.6 1-1 1.2-1.3c0.1-0.1 0.1-0.2 0.1-0.3c0-0.1 0-0.2-0.1-0.3c-0.6-0.7-1-1.2-1.3-1.7c0.2-0.4 0.4-0.8 0.5-1.1l2.3-0.4 c0.1 0 0.2-0.1 0.2-0.2c0.1-0.1 0.1-0.2 0.1-0.3L18.9 11.2L18.9 11.2z M12.1 15.2c-0.7 0.7-1.6 1.1-2.7 1.1s-1.9-0.4-2.7-1.1 c-0.7-0.7-1.1-1.6-1.1-2.7S6 10.6 6.8 9.8c0.7-0.7 1.6-1.1 2.7-1.1s1.9 0.4 2.7 1.1c0.7 0.7 1.1 1.6 1.1 2.7S12.9 14.4 12.1 15.2z\"/><circle fill=\"#3F3F3F\" cx=\"9.5\" cy=\"12.5\" r=\"2\"/></svg>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statustext", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : null), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        ob_start();
        // line 29
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statustext", array()), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : null), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : null), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 43
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/request.html.twig", 47)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
    }

    // line 50
    public function block_menu($context, array $blocks = array())
    {
        // line 51
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"38\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 38 28\" enable-background=\"new 0 0 38 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M26.7 20.5c0 0.3 0 0.7 0.1 1c-1.1 1-1.6 1.6-1.8 1.8c0 0 0 0.1 0 0.1c1 1.3 1.5 2 1.5 2 c0.1 0 0.4-0.1 1.1-0.4c0.6-0.3 1-0.6 1.3-0.7c0.2 0.1 0.4 0.2 0.5 0.2c0.1 0 0.3 0.1 0.5 0.2c0.1 0.3 0.2 0.8 0.4 1.4 s0.3 1 0.4 1.1c0 0 0.8-0.1 2.5-0.3c0.1 0 0.1 0 0.1-0.1c0.1-0.3 0.2-1.1 0.1-2.5c0.3-0.2 0.6-0.4 0.8-0.6c1.6 0.5 2.5 0.7 2.6 0.5 l1-2.2l0 0c0.1-0.2-0.6-0.7-2.2-1.5c0-0.4 0-0.7-0.1-1c1.1-1 1.6-1.6 1.8-1.8c0 0 0-0.1 0-0.1c-1-1.3-1.4-1.9-1.5-2l-0.1 0 c-0.6 0.2-1.4 0.6-2.2 1.2c-0.2-0.1-0.4-0.2-0.5-0.2c-0.1 0-0.3-0.1-0.5-0.2c-0.1-0.3-0.2-0.8-0.4-1.4c-0.2-0.7-0.3-1-0.4-1.1 c0 0-0.2 0-0.6 0c-0.4 0-0.8 0.1-1.2 0.1C29.4 14 29.2 14 29.2 14c-0.1 0-0.1 0-0.1 0.1c-0.1 0.3-0.2 1.1-0.1 2.5 c-0.3 0.2-0.6 0.4-0.8 0.6c-1.6-0.5-2.5-0.7-2.6-0.5l-1 2.2C24.5 19.1 25.2 19.6 26.7 20.5z M30.3 18.4c0.6-0.2 1.1-0.2 1.7 0 c0.6 0.2 0.9 0.6 1.2 1.2c0.2 0.6 0.2 1.1 0 1.7c-0.2 0.6-0.6 1-1.2 1.2c-0.6 0.2-1.1 0.2-1.7 0c-0.6-0.2-1-0.6-1.2-1.2 c-0.2-0.6-0.2-1.1 0-1.7C29.3 19.1 29.7 18.7 30.3 18.4z\"/><path fill=\"#3F3F3F\" d=\"M25.9 11.1c0-0.1 0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.2L22.3 10c-0.1-0.5-0.4-1-0.7-1.7 c0.2-0.3 0.5-0.7 0.9-1.2c0.4-0.5 0.7-0.9 0.8-1.1c0.1-0.1 0.1-0.3 0.1-0.4c0-0.4-1-1.4-2.9-3.2c-0.1-0.1-0.3-0.2-0.4-0.2 c-0.2 0-0.3 0-0.4 0.1l-2.4 1.8c-0.6-0.3-1.1-0.5-1.5-0.6l-0.5-3.1c0-0.1-0.1-0.3-0.2-0.4C15.1 0.1 15 0 14.8 0h-3.8 c-0.3 0-0.5 0.2-0.6 0.5c-0.2 0.6-0.3 1.7-0.5 3.1C9.4 3.8 8.9 4 8.4 4.2L6.1 2.4C6 2.3 5.8 2.3 5.7 2.3c-0.3 0-0.8 0.4-1.6 1.2 C3.3 4.3 2.7 4.9 2.4 5.3C2.3 5.4 2.3 5.5 2.3 5.7c0 0.1 0 0.3 0.1 0.4C3.2 7 3.8 7.8 4.2 8.4C4 9 3.7 9.5 3.6 10l-3.1 0.5 c-0.1 0-0.2 0.1-0.3 0.2C0 10.8 0 10.9 0 11.1v3.7c0 0.1 0 0.3 0.1 0.4c0.1 0.1 0.2 0.2 0.3 0.2l3.1 0.5c0.2 0.5 0.4 1.1 0.7 1.7 c-0.2 0.3-0.5 0.7-1 1.2c-0.4 0.5-0.7 0.9-0.8 1.1c-0.1 0.1-0.1 0.3-0.1 0.4c0 0.4 1 1.4 2.9 3.2c0.1 0.1 0.3 0.2 0.4 0.2 c0.2 0 0.3 0 0.4-0.1l2.4-1.8C9 22 9.5 22.2 10 22.3l0.5 3.1c0 0.1 0.1 0.3 0.2 0.4c0.1 0.1 0.3 0.2 0.4 0.2h3.8 c0.3 0 0.5-0.2 0.6-0.5c0.2-0.6 0.3-1.7 0.5-3.1c0.5-0.2 1.1-0.4 1.6-0.6l2.3 1.8c0.1 0.1 0.3 0.1 0.4 0.1c0.3 0 0.8-0.4 1.6-1.2 c0.8-0.8 1.4-1.4 1.7-1.8c0.1-0.1 0.1-0.2 0.1-0.4c0-0.1 0-0.3-0.1-0.4c-0.8-0.9-1.4-1.7-1.8-2.3c0.3-0.6 0.5-1.1 0.6-1.5l3.1-0.5 c0.1 0 0.2-0.1 0.3-0.2c0.1-0.1 0.1-0.3 0.1-0.4L25.9 11.1L25.9 11.1z M16.6 16.6c-1 1-2.2 1.5-3.7 1.5s-2.7-0.5-3.7-1.5 c-1-1-1.5-2.2-1.5-3.7s0.5-2.7 1.5-3.7c1-1 2.2-1.5 3.7-1.5s2.7 0.5 3.7 1.5c1 1 1.5 2.2 1.5 3.7S17.6 15.6 16.6 16.6z\"/><circle fill=\"#3F3F3F\" cx=\"12.9\" cy=\"12.9\" r=\"2.8\"/></svg></span>
    <strong>Request</strong>
</span>
";
    }

    // line 57
    public function block_panel($context, array $blocks = array())
    {
        // line 58
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 60
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestquery", array()), "all", array()))) {
            // line 61
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 61)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestquery", array())));
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 67
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestrequest", array()), "all", array()))) {
            // line 71
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 71)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestrequest", array())));
            // line 72
            echo "    ";
        } else {
            // line 73
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 77
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 80
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestattributes", array()), "all", array()))) {
            // line 81
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 81)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestattributes", array())));
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 87
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 90
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestcookies", array()), "all", array()))) {
            // line 91
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 91)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestcookies", array())));
            // line 92
            echo "    ";
        } else {
            // line 93
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 97
        echo "
    <h2>Request Headers</h2>

    ";
        // line 100
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 100)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestheaders", array())));
        // line 101
        echo "
    <h2>Request Content</h2>

    ";
        // line 104
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "content", array()) == false)) {
            // line 105
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute(        // line 106
(isset($context["collector"]) ? $context["collector"] : null), "content", array())) {
            // line 107
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "content", array()), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 109
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 111
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 114
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 114)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestserver", array())));
        // line 115
        echo "
    <h2>Response Headers</h2>

    ";
        // line 118
        $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 118)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "responseheaders", array())));
        // line 119
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 122
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array()))) {
            // line 123
            echo "    ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 123)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array())));
            // line 124
            echo "    ";
        } else {
            // line 125
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 129
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 132
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionattributes", array()))) {
            // line 133
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 133)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionattributes", array())));
            // line 134
            echo "    ";
        } else {
            // line 135
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 139
        echo "
    <h2>Flashes</h2>

    ";
        // line 142
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "flashes", array()))) {
            // line 143
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Collector/request.html.twig", 143)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "flashes", array())));
            // line 144
            echo "    ";
        } else {
            // line 145
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 149
        echo "
    ";
        // line 150
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array())) {
            // line 151
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "token", array()), "html", null, true);
            echo "</a></h2>

        ";
            // line 153
            $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 153)->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
            // line 154
            echo "    ";
        }
        // line 155
        echo "
    ";
        // line 156
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()))) {
            // line 157
            echo "        <h2>Sub requests</h2>

        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 160
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo "</a></h3>
            ";
                // line 161
                $this->loadTemplate("@WebProfiler/Profiler/bag.html.twig", "@WebProfiler/Collector/request.html.twig", 161)->display(array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
                // line 162
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "    ";
        }
        // line 164
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 164,  405 => 163,  399 => 162,  397 => 161,  390 => 160,  386 => 159,  382 => 157,  380 => 156,  377 => 155,  374 => 154,  372 => 153,  364 => 151,  362 => 150,  359 => 149,  353 => 145,  350 => 144,  347 => 143,  345 => 142,  340 => 139,  334 => 135,  331 => 134,  328 => 133,  326 => 132,  321 => 129,  315 => 125,  312 => 124,  309 => 123,  307 => 122,  302 => 119,  300 => 118,  295 => 115,  293 => 114,  288 => 111,  284 => 109,  278 => 107,  276 => 106,  273 => 105,  271 => 104,  266 => 101,  264 => 100,  259 => 97,  253 => 93,  250 => 92,  247 => 91,  245 => 90,  240 => 87,  234 => 83,  231 => 82,  228 => 81,  226 => 80,  221 => 77,  215 => 73,  212 => 72,  209 => 71,  207 => 70,  202 => 67,  196 => 63,  193 => 62,  190 => 61,  188 => 60,  184 => 58,  181 => 57,  173 => 51,  170 => 50,  165 => 47,  162 => 46,  152 => 43,  145 => 39,  138 => 35,  127 => 31,  123 => 29,  120 => 28,  117 => 27,  112 => 25,  108 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  79 => 16,  76 => 15,  64 => 13,  58 => 10,  50 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set request_handler %}
        {% if collector.controller.class is defined %}
            {% set link = collector.controller.file|file_link(collector.controller.line) %}
            {% if collector.controller.method %}
                <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">{{ collector.controller.class|abbr_class }}</span>
                <span class=\"sf-toolbar-info-method\"{% if link %} onclick=\"window.location='{{link|e('js')}}';window.event.stopPropagation();return false;\"{% endif %}>
                    {{ collector.controller.method }}
                </span>
            {% else %}
                <span class=\"sf-toolbar-info-class\"{% if link %} onclick=\"window.location='{{link|e('js')}}';window.event.stopPropagation();return false;\"{% endif %}>{{ collector.controller.class|abbr_class }}</span>
            {% endif %}
        {% else %}
            <span class=\"sf-toolbar-info-class\">{{ collector.controller }}</span>
        {% endif %}
    {% endset %}
    {% set request_status_code_color = (400 > collector.statuscode) ? ((200 == collector.statuscode) ? 'green' : 'yellow') : 'red'%}
    {% set request_route = collector.route ? collector.route : 'NONE' %}
    {% set icon %}
        <svg width=\"28\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 28 28\" enable-background=\"new 0 0 28 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M19.5 18c0 0.2 0 0.5 0.1 0.8c-0.8 0.7-1.2 1.2-1.3 1.3c0 0 0 0.1 0 0.1c0.7 1 1.1 1.4 1.1 1.4 c0.1 0 0.3-0.1 0.8-0.3c0.4-0.2 0.8-0.4 0.9-0.5c0.1 0.1 0.3 0.1 0.3 0.2c0.1 0 0.2 0.1 0.4 0.1c0 0.2 0.1 0.6 0.3 1 c0.1 0.5 0.2 0.7 0.3 0.8c0 0 0.6-0.1 1.8-0.2c0 0 0.1 0 0.1-0.1c0.1-0.2 0.1-0.8 0.1-1.9c0.2-0.1 0.4-0.3 0.6-0.5 c1.2 0.4 1.8 0.5 1.9 0.4l0.7-1.6l0 0c0.1-0.1-0.5-0.5-1.6-1.1c0-0.3 0-0.5-0.1-0.8c0.8-0.7 1.2-1.2 1.3-1.3c0 0 0-0.1 0-0.1 c-0.7-0.9-1.1-1.4-1.1-1.4l-0.1 0c-0.5 0.2-1 0.5-1.6 0.8c-0.1-0.1-0.3-0.1-0.3-0.2c-0.1 0-0.2-0.1-0.4-0.1c0-0.2-0.1-0.6-0.3-1 c-0.1-0.5-0.2-0.7-0.3-0.8c0 0-0.2 0-0.4 0c-0.3 0-0.6 0.1-0.9 0.1c-0.3 0-0.5 0.1-0.5 0.1c0 0-0.1 0-0.1 0.1 c-0.1 0.2-0.1 0.8-0.1 1.9c-0.2 0.1-0.4 0.3-0.6 0.5c-1.2-0.4-1.8-0.5-1.9-0.4l-0.7 1.6C17.9 17 18.4 17.4 19.5 18z M22.2 16.5 c0.4-0.2 0.8-0.2 1.2 0c0.4 0.2 0.7 0.5 0.9 0.9c0.2 0.4 0.2 0.8 0 1.2c-0.2 0.4-0.5 0.7-0.9 0.9c-0.4 0.2-0.8 0.2-1.2 0 c-0.4-0.2-0.7-0.5-0.9-0.9c-0.2-0.4-0.2-0.8 0-1.2C21.4 17 21.7 16.7 22.2 16.5z\"/><path fill=\"#3F3F3F\" d=\"M18.9 11.2c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2l-2.2-0.3c-0.1-0.3-0.3-0.7-0.5-1.2 C16 9 16.2 8.7 16.5 8.3s0.5-0.6 0.6-0.8c0.1-0.1 0.1-0.2 0.1-0.3c0-0.3-0.7-1.1-2.1-2.4c-0.1-0.1-0.2-0.1-0.3-0.1 c-0.1 0-0.2 0-0.3 0.1l-1.7 1.3c-0.4-0.2-0.8-0.4-1.1-0.5l-0.3-2.3c0-0.1-0.1-0.2-0.1-0.3C11 3.1 10.9 3 10.8 3H8.1 C7.9 3 7.7 3.2 7.6 3.4C7.5 3.9 7.4 4.6 7.3 5.7C6.9 5.8 6.5 6 6.2 6.2L4.5 4.8C4.4 4.8 4.3 4.7 4.2 4.7C4 4.7 3.6 5 3 5.6 c-0.6 0.6-1 1-1.2 1.3C1.7 7 1.7 7.1 1.7 7.2c0 0.1 0 0.2 0.1 0.3c0.6 0.7 1 1.2 1.3 1.7C2.9 9.6 2.7 10 2.6 10.3l-2.3 0.4 c-0.1 0-0.2 0.1-0.2 0.2C0 10.9 0 11 0 11.1v2.7c0 0.1 0 0.2 0.1 0.3c0.1 0.1 0.2 0.1 0.3 0.1l2.2 0.4c0.1 0.4 0.3 0.8 0.5 1.2 c-0.2 0.2-0.4 0.5-0.7 0.9c-0.3 0.4-0.5 0.6-0.6 0.8c-0.1 0.1-0.1 0.2-0.1 0.3c0 0.3 0.7 1.1 2.1 2.4c0.1 0.1 0.2 0.1 0.3 0.1 c0.1 0 0.2 0 0.3-0.1l1.7-1.3c0.4 0.2 0.8 0.4 1.1 0.5l0.3 2.3c0 0.1 0.1 0.2 0.1 0.3C7.9 21.9 8 22 8.1 22h2.8 c0.2 0 0.4-0.1 0.4-0.4c0.1-0.5 0.2-1.2 0.3-2.3c0.4-0.1 0.8-0.3 1.1-0.5l1.7 1.3c0.1 0.1 0.2 0.1 0.3 0.1c0.2 0 0.6-0.3 1.2-0.9 c0.6-0.6 1-1 1.2-1.3c0.1-0.1 0.1-0.2 0.1-0.3c0-0.1 0-0.2-0.1-0.3c-0.6-0.7-1-1.2-1.3-1.7c0.2-0.4 0.4-0.8 0.5-1.1l2.3-0.4 c0.1 0 0.2-0.1 0.2-0.2c0.1-0.1 0.1-0.2 0.1-0.3L18.9 11.2L18.9 11.2z M12.1 15.2c-0.7 0.7-1.6 1.1-2.7 1.1s-1.9-0.4-2.7-1.1 c-0.7-0.7-1.1-1.6-1.1-2.7S6 10.6 6.8 9.8c0.7-0.7 1.6-1.1 2.7-1.1s1.9 0.4 2.7 1.1c0.7 0.7 1.1 1.6 1.1 2.7S12.9 14.4 12.1 15.2z\"/><circle fill=\"#3F3F3F\" cx=\"9.5\" cy=\"12.5\" r=\"2\"/></svg>
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\" title=\"{{ collector.statustext }}\">{{ collector.statuscode }}</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">{{ request_handler }}</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>{{ request_route }}</i></span>
    {% endset %}
    {% set text %}
        {% spaceless %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span> {{ collector.statustext }}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                {{ request_handler }}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ request_route }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"38\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 38 28\" enable-background=\"new 0 0 38 28\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M26.7 20.5c0 0.3 0 0.7 0.1 1c-1.1 1-1.6 1.6-1.8 1.8c0 0 0 0.1 0 0.1c1 1.3 1.5 2 1.5 2 c0.1 0 0.4-0.1 1.1-0.4c0.6-0.3 1-0.6 1.3-0.7c0.2 0.1 0.4 0.2 0.5 0.2c0.1 0 0.3 0.1 0.5 0.2c0.1 0.3 0.2 0.8 0.4 1.4 s0.3 1 0.4 1.1c0 0 0.8-0.1 2.5-0.3c0.1 0 0.1 0 0.1-0.1c0.1-0.3 0.2-1.1 0.1-2.5c0.3-0.2 0.6-0.4 0.8-0.6c1.6 0.5 2.5 0.7 2.6 0.5 l1-2.2l0 0c0.1-0.2-0.6-0.7-2.2-1.5c0-0.4 0-0.7-0.1-1c1.1-1 1.6-1.6 1.8-1.8c0 0 0-0.1 0-0.1c-1-1.3-1.4-1.9-1.5-2l-0.1 0 c-0.6 0.2-1.4 0.6-2.2 1.2c-0.2-0.1-0.4-0.2-0.5-0.2c-0.1 0-0.3-0.1-0.5-0.2c-0.1-0.3-0.2-0.8-0.4-1.4c-0.2-0.7-0.3-1-0.4-1.1 c0 0-0.2 0-0.6 0c-0.4 0-0.8 0.1-1.2 0.1C29.4 14 29.2 14 29.2 14c-0.1 0-0.1 0-0.1 0.1c-0.1 0.3-0.2 1.1-0.1 2.5 c-0.3 0.2-0.6 0.4-0.8 0.6c-1.6-0.5-2.5-0.7-2.6-0.5l-1 2.2C24.5 19.1 25.2 19.6 26.7 20.5z M30.3 18.4c0.6-0.2 1.1-0.2 1.7 0 c0.6 0.2 0.9 0.6 1.2 1.2c0.2 0.6 0.2 1.1 0 1.7c-0.2 0.6-0.6 1-1.2 1.2c-0.6 0.2-1.1 0.2-1.7 0c-0.6-0.2-1-0.6-1.2-1.2 c-0.2-0.6-0.2-1.1 0-1.7C29.3 19.1 29.7 18.7 30.3 18.4z\"/><path fill=\"#3F3F3F\" d=\"M25.9 11.1c0-0.1 0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.2L22.3 10c-0.1-0.5-0.4-1-0.7-1.7 c0.2-0.3 0.5-0.7 0.9-1.2c0.4-0.5 0.7-0.9 0.8-1.1c0.1-0.1 0.1-0.3 0.1-0.4c0-0.4-1-1.4-2.9-3.2c-0.1-0.1-0.3-0.2-0.4-0.2 c-0.2 0-0.3 0-0.4 0.1l-2.4 1.8c-0.6-0.3-1.1-0.5-1.5-0.6l-0.5-3.1c0-0.1-0.1-0.3-0.2-0.4C15.1 0.1 15 0 14.8 0h-3.8 c-0.3 0-0.5 0.2-0.6 0.5c-0.2 0.6-0.3 1.7-0.5 3.1C9.4 3.8 8.9 4 8.4 4.2L6.1 2.4C6 2.3 5.8 2.3 5.7 2.3c-0.3 0-0.8 0.4-1.6 1.2 C3.3 4.3 2.7 4.9 2.4 5.3C2.3 5.4 2.3 5.5 2.3 5.7c0 0.1 0 0.3 0.1 0.4C3.2 7 3.8 7.8 4.2 8.4C4 9 3.7 9.5 3.6 10l-3.1 0.5 c-0.1 0-0.2 0.1-0.3 0.2C0 10.8 0 10.9 0 11.1v3.7c0 0.1 0 0.3 0.1 0.4c0.1 0.1 0.2 0.2 0.3 0.2l3.1 0.5c0.2 0.5 0.4 1.1 0.7 1.7 c-0.2 0.3-0.5 0.7-1 1.2c-0.4 0.5-0.7 0.9-0.8 1.1c-0.1 0.1-0.1 0.3-0.1 0.4c0 0.4 1 1.4 2.9 3.2c0.1 0.1 0.3 0.2 0.4 0.2 c0.2 0 0.3 0 0.4-0.1l2.4-1.8C9 22 9.5 22.2 10 22.3l0.5 3.1c0 0.1 0.1 0.3 0.2 0.4c0.1 0.1 0.3 0.2 0.4 0.2h3.8 c0.3 0 0.5-0.2 0.6-0.5c0.2-0.6 0.3-1.7 0.5-3.1c0.5-0.2 1.1-0.4 1.6-0.6l2.3 1.8c0.1 0.1 0.3 0.1 0.4 0.1c0.3 0 0.8-0.4 1.6-1.2 c0.8-0.8 1.4-1.4 1.7-1.8c0.1-0.1 0.1-0.2 0.1-0.4c0-0.1 0-0.3-0.1-0.4c-0.8-0.9-1.4-1.7-1.8-2.3c0.3-0.6 0.5-1.1 0.6-1.5l3.1-0.5 c0.1 0 0.2-0.1 0.3-0.2c0.1-0.1 0.1-0.3 0.1-0.4L25.9 11.1L25.9 11.1z M16.6 16.6c-1 1-2.2 1.5-3.7 1.5s-2.7-0.5-3.7-1.5 c-1-1-1.5-2.2-1.5-3.7s0.5-2.7 1.5-3.7c1-1 2.2-1.5 3.7-1.5s2.7 0.5 3.7 1.5c1 1 1.5 2.2 1.5 3.7S17.6 15.6 16.6 16.6z\"/><circle fill=\"#3F3F3F\" cx=\"12.9\" cy=\"12.9\" r=\"2.8\"/></svg></span>
    <strong>Request</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Request GET Parameters</h2>

    {% if collector.requestquery.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestquery } only %}
    {% else %}
        <p>
            <em>No GET parameters</em>
        </p>
    {% endif %}

    <h2>Request POST Parameters</h2>

    {% if collector.requestrequest.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestrequest } only %}
    {% else %}
        <p>
            <em>No POST parameters</em>
        </p>
    {% endif %}

    <h2>Request Attributes</h2>

    {% if collector.requestattributes.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestattributes } only %}
    {% else %}
        <p>
            <em>No attributes</em>
        </p>
    {% endif %}

    <h2>Request Cookies</h2>

    {% if collector.requestcookies.all|length %}
        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestcookies } only %}
    {% else %}
        <p>
            <em>No cookies</em>
        </p>
    {% endif %}

    <h2>Request Headers</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestheaders } only %}

    <h2>Request Content</h2>

    {% if collector.content == false %}
        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    {% elseif collector.content %}
        <pre>{{ collector.content }}</pre>
    {% else %}
        <p><em>No content</em></p>
    {% endif %}

    <h2>Request Server Parameters</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.requestserver } only %}

    <h2>Response Headers</h2>

    {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': collector.responseheaders } only %}

    <h2>Session Metadata</h2>

    {% if collector.sessionmetadata|length %}
    {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionmetadata } only %}
    {% else %}
    <p>
        <em>No session metadata</em>
    </p>
    {% endif %}

    <h2>Session Attributes</h2>

    {% if collector.sessionattributes|length %}
        {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.sessionattributes } only %}
    {% else %}
        <p>
            <em>No session attributes</em>
        </p>
    {% endif %}

    <h2>Flashes</h2>

    {% if collector.flashes|length %}
        {% include '@WebProfiler/Profiler/table.html.twig' with { 'data': collector.flashes } only %}
    {% else %}
        <p>
            <em>No flashes</em>
        </p>
    {% endif %}

    {% if profile.parent %}
        <h2><a href=\"{{ path('_profiler', { 'token': profile.parent.token }) }}\">Parent request: {{ profile.parent.token }}</a></h2>

        {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': profile.parent.getcollector('request').requestattributes } only %}
    {% endif %}

    {% if profile.children|length %}
        <h2>Sub requests</h2>

        {% for child in profile.children %}
            <h3><a href=\"{{ path('_profiler', { 'token': child.token }) }}\">{{ child.token }}</a></h3>
            {% include '@WebProfiler/Profiler/bag.html.twig' with { 'bag': child.getcollector('request').requestattributes } only %}
        {% endfor %}
    {% endif %}

{% endblock %}
";
    }
}
