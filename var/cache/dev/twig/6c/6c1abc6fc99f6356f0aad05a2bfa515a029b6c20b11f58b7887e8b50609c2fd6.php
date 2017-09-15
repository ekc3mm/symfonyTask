<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e6cbd44db85f7ea08366e495958e154be374feeba74bcf5b27dbdeb165e0f3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77721861c8915fe4cf996bfe9a9b641ef673b369f8ba3e9d93ee792b1d80b627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77721861c8915fe4cf996bfe9a9b641ef673b369f8ba3e9d93ee792b1d80b627->enter($__internal_77721861c8915fe4cf996bfe9a9b641ef673b369f8ba3e9d93ee792b1d80b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e98911287c343e3ea5e4bcef74c90e137d6d445099897e9adf67fd99019d1a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98911287c343e3ea5e4bcef74c90e137d6d445099897e9adf67fd99019d1a33->enter($__internal_e98911287c343e3ea5e4bcef74c90e137d6d445099897e9adf67fd99019d1a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_77721861c8915fe4cf996bfe9a9b641ef673b369f8ba3e9d93ee792b1d80b627->leave($__internal_77721861c8915fe4cf996bfe9a9b641ef673b369f8ba3e9d93ee792b1d80b627_prof);

        
        $__internal_e98911287c343e3ea5e4bcef74c90e137d6d445099897e9adf67fd99019d1a33->leave($__internal_e98911287c343e3ea5e4bcef74c90e137d6d445099897e9adf67fd99019d1a33_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_21a04e5059319ae4bb8cc0bd69a7c1baaa9833d4bc61ee5cf4187f63e6a69ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a04e5059319ae4bb8cc0bd69a7c1baaa9833d4bc61ee5cf4187f63e6a69ec8->enter($__internal_21a04e5059319ae4bb8cc0bd69a7c1baaa9833d4bc61ee5cf4187f63e6a69ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0d3099d8ac1c49c7b6175d5adbc68e2014422ab44928e40d02d7f02aaac8b2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3099d8ac1c49c7b6175d5adbc68e2014422ab44928e40d02d7f02aaac8b2ce->enter($__internal_0d3099d8ac1c49c7b6175d5adbc68e2014422ab44928e40d02d7f02aaac8b2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0d3099d8ac1c49c7b6175d5adbc68e2014422ab44928e40d02d7f02aaac8b2ce->leave($__internal_0d3099d8ac1c49c7b6175d5adbc68e2014422ab44928e40d02d7f02aaac8b2ce_prof);

        
        $__internal_21a04e5059319ae4bb8cc0bd69a7c1baaa9833d4bc61ee5cf4187f63e6a69ec8->leave($__internal_21a04e5059319ae4bb8cc0bd69a7c1baaa9833d4bc61ee5cf4187f63e6a69ec8_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_457be1c6e501058f087e8e9920484c1b3e8f4dfe47dcb5ce59ca8dfde5cdfdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457be1c6e501058f087e8e9920484c1b3e8f4dfe47dcb5ce59ca8dfde5cdfdfa->enter($__internal_457be1c6e501058f087e8e9920484c1b3e8f4dfe47dcb5ce59ca8dfde5cdfdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0fd004b769f22dac6015fc3ade50423a11b449c5f46e5fa778a31e44d35cf58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd004b769f22dac6015fc3ade50423a11b449c5f46e5fa778a31e44d35cf58f->enter($__internal_0fd004b769f22dac6015fc3ade50423a11b449c5f46e5fa778a31e44d35cf58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0fd004b769f22dac6015fc3ade50423a11b449c5f46e5fa778a31e44d35cf58f->leave($__internal_0fd004b769f22dac6015fc3ade50423a11b449c5f46e5fa778a31e44d35cf58f_prof);

        
        $__internal_457be1c6e501058f087e8e9920484c1b3e8f4dfe47dcb5ce59ca8dfde5cdfdfa->leave($__internal_457be1c6e501058f087e8e9920484c1b3e8f4dfe47dcb5ce59ca8dfde5cdfdfa_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b572f9f3ae991ff39f29fd8b168d7473594625c3a858df52f1170d761ee9a00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b572f9f3ae991ff39f29fd8b168d7473594625c3a858df52f1170d761ee9a00c->enter($__internal_b572f9f3ae991ff39f29fd8b168d7473594625c3a858df52f1170d761ee9a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9b370c6b53686564482c9cbc5c97fc6c23a94230e0c7f4d95fa23d6d1845629f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b370c6b53686564482c9cbc5c97fc6c23a94230e0c7f4d95fa23d6d1845629f->enter($__internal_9b370c6b53686564482c9cbc5c97fc6c23a94230e0c7f4d95fa23d6d1845629f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9b370c6b53686564482c9cbc5c97fc6c23a94230e0c7f4d95fa23d6d1845629f->leave($__internal_9b370c6b53686564482c9cbc5c97fc6c23a94230e0c7f4d95fa23d6d1845629f_prof);

        
        $__internal_b572f9f3ae991ff39f29fd8b168d7473594625c3a858df52f1170d761ee9a00c->leave($__internal_b572f9f3ae991ff39f29fd8b168d7473594625c3a858df52f1170d761ee9a00c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7d5249be4aafa6c84ce47476210bb44f0236036045b864e44859f005dce09ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5249be4aafa6c84ce47476210bb44f0236036045b864e44859f005dce09ab3->enter($__internal_7d5249be4aafa6c84ce47476210bb44f0236036045b864e44859f005dce09ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_dbed7f39a283e4a06dcfcaf6243d1c4fed8228a83d8f5fb52d9fbe5ac30b10d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed7f39a283e4a06dcfcaf6243d1c4fed8228a83d8f5fb52d9fbe5ac30b10d6->enter($__internal_dbed7f39a283e4a06dcfcaf6243d1c4fed8228a83d8f5fb52d9fbe5ac30b10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_93e7450b61505f1d3612e22c3202d2aae2b3fd788bda871a3ca8acd1bc47e2dc = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_17bc4408f4eb1e61d9a8728d8577ba8431304f6a5f029ddc97a91ec466881496 = "{{") && ('' === $__internal_17bc4408f4eb1e61d9a8728d8577ba8431304f6a5f029ddc97a91ec466881496 || 0 === strpos($__internal_93e7450b61505f1d3612e22c3202d2aae2b3fd788bda871a3ca8acd1bc47e2dc, $__internal_17bc4408f4eb1e61d9a8728d8577ba8431304f6a5f029ddc97a91ec466881496)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_dbed7f39a283e4a06dcfcaf6243d1c4fed8228a83d8f5fb52d9fbe5ac30b10d6->leave($__internal_dbed7f39a283e4a06dcfcaf6243d1c4fed8228a83d8f5fb52d9fbe5ac30b10d6_prof);

        
        $__internal_7d5249be4aafa6c84ce47476210bb44f0236036045b864e44859f005dce09ab3->leave($__internal_7d5249be4aafa6c84ce47476210bb44f0236036045b864e44859f005dce09ab3_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3dbdf28f9de08ac0a486b2e1987fed850f37af97b72411238fbecef7724e92ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbdf28f9de08ac0a486b2e1987fed850f37af97b72411238fbecef7724e92ce->enter($__internal_3dbdf28f9de08ac0a486b2e1987fed850f37af97b72411238fbecef7724e92ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_40079a454573e292f7bb7331066fe4cb3efc73d07894ad643a5124179fdb52ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40079a454573e292f7bb7331066fe4cb3efc73d07894ad643a5124179fdb52ca->enter($__internal_40079a454573e292f7bb7331066fe4cb3efc73d07894ad643a5124179fdb52ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_40079a454573e292f7bb7331066fe4cb3efc73d07894ad643a5124179fdb52ca->leave($__internal_40079a454573e292f7bb7331066fe4cb3efc73d07894ad643a5124179fdb52ca_prof);

        
        $__internal_3dbdf28f9de08ac0a486b2e1987fed850f37af97b72411238fbecef7724e92ce->leave($__internal_3dbdf28f9de08ac0a486b2e1987fed850f37af97b72411238fbecef7724e92ce_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a137316669d6b1390585839ac2222dc26fc42d061fd4af8746651140beca79f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a137316669d6b1390585839ac2222dc26fc42d061fd4af8746651140beca79f6->enter($__internal_a137316669d6b1390585839ac2222dc26fc42d061fd4af8746651140beca79f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2e152cc2b329945005960336e0e928ee843afb62f26f2e1ca5c57bdcb4363d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e152cc2b329945005960336e0e928ee843afb62f26f2e1ca5c57bdcb4363d38->enter($__internal_2e152cc2b329945005960336e0e928ee843afb62f26f2e1ca5c57bdcb4363d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_2e152cc2b329945005960336e0e928ee843afb62f26f2e1ca5c57bdcb4363d38->leave($__internal_2e152cc2b329945005960336e0e928ee843afb62f26f2e1ca5c57bdcb4363d38_prof);

        
        $__internal_a137316669d6b1390585839ac2222dc26fc42d061fd4af8746651140beca79f6->leave($__internal_a137316669d6b1390585839ac2222dc26fc42d061fd4af8746651140beca79f6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_38b3e069db61a85bc3f64de5b4ae6b7dc6e53f0db0de8fef5579323acf21f83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b3e069db61a85bc3f64de5b4ae6b7dc6e53f0db0de8fef5579323acf21f83e->enter($__internal_38b3e069db61a85bc3f64de5b4ae6b7dc6e53f0db0de8fef5579323acf21f83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_01904001e585fdae49f04d785c0b318f8d851e0bfcaacccde190ed3dcdddb9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01904001e585fdae49f04d785c0b318f8d851e0bfcaacccde190ed3dcdddb9dd->enter($__internal_01904001e585fdae49f04d785c0b318f8d851e0bfcaacccde190ed3dcdddb9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_01904001e585fdae49f04d785c0b318f8d851e0bfcaacccde190ed3dcdddb9dd->leave($__internal_01904001e585fdae49f04d785c0b318f8d851e0bfcaacccde190ed3dcdddb9dd_prof);

        
        $__internal_38b3e069db61a85bc3f64de5b4ae6b7dc6e53f0db0de8fef5579323acf21f83e->leave($__internal_38b3e069db61a85bc3f64de5b4ae6b7dc6e53f0db0de8fef5579323acf21f83e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ad7e1e788c8e57d78b1c42ad27c6da1695a6b33c2f44c5de1d9b27e78abff9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7e1e788c8e57d78b1c42ad27c6da1695a6b33c2f44c5de1d9b27e78abff9fb->enter($__internal_ad7e1e788c8e57d78b1c42ad27c6da1695a6b33c2f44c5de1d9b27e78abff9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_5555d57c8d8915ee11c8bc77408d224720b72eee17444a5c7003b752bd05628c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5555d57c8d8915ee11c8bc77408d224720b72eee17444a5c7003b752bd05628c->enter($__internal_5555d57c8d8915ee11c8bc77408d224720b72eee17444a5c7003b752bd05628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5555d57c8d8915ee11c8bc77408d224720b72eee17444a5c7003b752bd05628c->leave($__internal_5555d57c8d8915ee11c8bc77408d224720b72eee17444a5c7003b752bd05628c_prof);

        
        $__internal_ad7e1e788c8e57d78b1c42ad27c6da1695a6b33c2f44c5de1d9b27e78abff9fb->leave($__internal_ad7e1e788c8e57d78b1c42ad27c6da1695a6b33c2f44c5de1d9b27e78abff9fb_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c511b989b9505a0e6393984854aea5f16c9e5b2df2022b5c81bd23c40037804d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c511b989b9505a0e6393984854aea5f16c9e5b2df2022b5c81bd23c40037804d->enter($__internal_c511b989b9505a0e6393984854aea5f16c9e5b2df2022b5c81bd23c40037804d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_92b605cd5100ca60212e1a0f9a5728af04fcde597c4ed6088f08d731b7b28f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b605cd5100ca60212e1a0f9a5728af04fcde597c4ed6088f08d731b7b28f48->enter($__internal_92b605cd5100ca60212e1a0f9a5728af04fcde597c4ed6088f08d731b7b28f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_92b605cd5100ca60212e1a0f9a5728af04fcde597c4ed6088f08d731b7b28f48->leave($__internal_92b605cd5100ca60212e1a0f9a5728af04fcde597c4ed6088f08d731b7b28f48_prof);

        
        $__internal_c511b989b9505a0e6393984854aea5f16c9e5b2df2022b5c81bd23c40037804d->leave($__internal_c511b989b9505a0e6393984854aea5f16c9e5b2df2022b5c81bd23c40037804d_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e583b4978caa29ac090c0fcf9b5ccf47df32ca41eb5d52d645ad5998dd57eda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e583b4978caa29ac090c0fcf9b5ccf47df32ca41eb5d52d645ad5998dd57eda4->enter($__internal_e583b4978caa29ac090c0fcf9b5ccf47df32ca41eb5d52d645ad5998dd57eda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cd037782af720229b23a671a9a8ed705316525d48dece750f370a900d36697eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd037782af720229b23a671a9a8ed705316525d48dece750f370a900d36697eb->enter($__internal_cd037782af720229b23a671a9a8ed705316525d48dece750f370a900d36697eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_cd037782af720229b23a671a9a8ed705316525d48dece750f370a900d36697eb->leave($__internal_cd037782af720229b23a671a9a8ed705316525d48dece750f370a900d36697eb_prof);

        
        $__internal_e583b4978caa29ac090c0fcf9b5ccf47df32ca41eb5d52d645ad5998dd57eda4->leave($__internal_e583b4978caa29ac090c0fcf9b5ccf47df32ca41eb5d52d645ad5998dd57eda4_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4d28b3a09cc56161cb0652a6af75726c23c8ccf160c8a7e895eae989399e8590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d28b3a09cc56161cb0652a6af75726c23c8ccf160c8a7e895eae989399e8590->enter($__internal_4d28b3a09cc56161cb0652a6af75726c23c8ccf160c8a7e895eae989399e8590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f049947fee6d58b16bd4db97cc5ad816518f956a8de00731aca018d6779903d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f049947fee6d58b16bd4db97cc5ad816518f956a8de00731aca018d6779903d1->enter($__internal_f049947fee6d58b16bd4db97cc5ad816518f956a8de00731aca018d6779903d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_f049947fee6d58b16bd4db97cc5ad816518f956a8de00731aca018d6779903d1->leave($__internal_f049947fee6d58b16bd4db97cc5ad816518f956a8de00731aca018d6779903d1_prof);

        
        $__internal_4d28b3a09cc56161cb0652a6af75726c23c8ccf160c8a7e895eae989399e8590->leave($__internal_4d28b3a09cc56161cb0652a6af75726c23c8ccf160c8a7e895eae989399e8590_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ee6ee2e038127ba4774d3ea1658071cd23eb15f99b48018a2bcfebb56089a985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6ee2e038127ba4774d3ea1658071cd23eb15f99b48018a2bcfebb56089a985->enter($__internal_ee6ee2e038127ba4774d3ea1658071cd23eb15f99b48018a2bcfebb56089a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_06992dc361ec8027cef6b4062ed4570f3a4c5676cb48153960ccfc0108b04129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06992dc361ec8027cef6b4062ed4570f3a4c5676cb48153960ccfc0108b04129->enter($__internal_06992dc361ec8027cef6b4062ed4570f3a4c5676cb48153960ccfc0108b04129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_06992dc361ec8027cef6b4062ed4570f3a4c5676cb48153960ccfc0108b04129->leave($__internal_06992dc361ec8027cef6b4062ed4570f3a4c5676cb48153960ccfc0108b04129_prof);

        
        $__internal_ee6ee2e038127ba4774d3ea1658071cd23eb15f99b48018a2bcfebb56089a985->leave($__internal_ee6ee2e038127ba4774d3ea1658071cd23eb15f99b48018a2bcfebb56089a985_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_48055521bc21ed717268f5189ec8a97b82f730b89e1109db4d9161fdc7b73366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48055521bc21ed717268f5189ec8a97b82f730b89e1109db4d9161fdc7b73366->enter($__internal_48055521bc21ed717268f5189ec8a97b82f730b89e1109db4d9161fdc7b73366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_fb5c38f2ce36b19f8700e566866b2c1743e5d089779978ff6d0d65a6ad872b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5c38f2ce36b19f8700e566866b2c1743e5d089779978ff6d0d65a6ad872b8e->enter($__internal_fb5c38f2ce36b19f8700e566866b2c1743e5d089779978ff6d0d65a6ad872b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_fb5c38f2ce36b19f8700e566866b2c1743e5d089779978ff6d0d65a6ad872b8e->leave($__internal_fb5c38f2ce36b19f8700e566866b2c1743e5d089779978ff6d0d65a6ad872b8e_prof);

        
        $__internal_48055521bc21ed717268f5189ec8a97b82f730b89e1109db4d9161fdc7b73366->leave($__internal_48055521bc21ed717268f5189ec8a97b82f730b89e1109db4d9161fdc7b73366_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bc83796b9f49dac7aab34037f4ec9caf85f2adee7ad93333febc662e17bdc1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc83796b9f49dac7aab34037f4ec9caf85f2adee7ad93333febc662e17bdc1bc->enter($__internal_bc83796b9f49dac7aab34037f4ec9caf85f2adee7ad93333febc662e17bdc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_96777984a3e7f326823e32d73d3f7863fa83928adc48e1006b9b577209bd4883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96777984a3e7f326823e32d73d3f7863fa83928adc48e1006b9b577209bd4883->enter($__internal_96777984a3e7f326823e32d73d3f7863fa83928adc48e1006b9b577209bd4883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_96777984a3e7f326823e32d73d3f7863fa83928adc48e1006b9b577209bd4883->leave($__internal_96777984a3e7f326823e32d73d3f7863fa83928adc48e1006b9b577209bd4883_prof);

        
        $__internal_bc83796b9f49dac7aab34037f4ec9caf85f2adee7ad93333febc662e17bdc1bc->leave($__internal_bc83796b9f49dac7aab34037f4ec9caf85f2adee7ad93333febc662e17bdc1bc_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a038bd274d250f9306f0bd5863d1ffc3bf4704ef6679ae296e7879343a440e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a038bd274d250f9306f0bd5863d1ffc3bf4704ef6679ae296e7879343a440e7c->enter($__internal_a038bd274d250f9306f0bd5863d1ffc3bf4704ef6679ae296e7879343a440e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c6428d5b456c3ece579fc1cbd7fe5231f849deb70b5f1ddcde0cac74ee4fc00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6428d5b456c3ece579fc1cbd7fe5231f849deb70b5f1ddcde0cac74ee4fc00c->enter($__internal_c6428d5b456c3ece579fc1cbd7fe5231f849deb70b5f1ddcde0cac74ee4fc00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c6428d5b456c3ece579fc1cbd7fe5231f849deb70b5f1ddcde0cac74ee4fc00c->leave($__internal_c6428d5b456c3ece579fc1cbd7fe5231f849deb70b5f1ddcde0cac74ee4fc00c_prof);

        
        $__internal_a038bd274d250f9306f0bd5863d1ffc3bf4704ef6679ae296e7879343a440e7c->leave($__internal_a038bd274d250f9306f0bd5863d1ffc3bf4704ef6679ae296e7879343a440e7c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6e14d44ff6683ee14d559fbe33887358982f52ea352a5dfc818ab7c658b547ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e14d44ff6683ee14d559fbe33887358982f52ea352a5dfc818ab7c658b547ec->enter($__internal_6e14d44ff6683ee14d559fbe33887358982f52ea352a5dfc818ab7c658b547ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_f95dd074cfeafbd4ee2cc4c7397ec01a5f5050d1f4b3e4228e9c8f7dc2f1817f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95dd074cfeafbd4ee2cc4c7397ec01a5f5050d1f4b3e4228e9c8f7dc2f1817f->enter($__internal_f95dd074cfeafbd4ee2cc4c7397ec01a5f5050d1f4b3e4228e9c8f7dc2f1817f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f95dd074cfeafbd4ee2cc4c7397ec01a5f5050d1f4b3e4228e9c8f7dc2f1817f->leave($__internal_f95dd074cfeafbd4ee2cc4c7397ec01a5f5050d1f4b3e4228e9c8f7dc2f1817f_prof);

        
        $__internal_6e14d44ff6683ee14d559fbe33887358982f52ea352a5dfc818ab7c658b547ec->leave($__internal_6e14d44ff6683ee14d559fbe33887358982f52ea352a5dfc818ab7c658b547ec_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c7f360edd596a93b961a6ed75193c48b5aeab291de6b9f8293235a429122200c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f360edd596a93b961a6ed75193c48b5aeab291de6b9f8293235a429122200c->enter($__internal_c7f360edd596a93b961a6ed75193c48b5aeab291de6b9f8293235a429122200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_aaa839dc24a7d6a39c2c99519f35dcb774b4c4994849207223475a0bd9c042a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa839dc24a7d6a39c2c99519f35dcb774b4c4994849207223475a0bd9c042a0->enter($__internal_aaa839dc24a7d6a39c2c99519f35dcb774b4c4994849207223475a0bd9c042a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aaa839dc24a7d6a39c2c99519f35dcb774b4c4994849207223475a0bd9c042a0->leave($__internal_aaa839dc24a7d6a39c2c99519f35dcb774b4c4994849207223475a0bd9c042a0_prof);

        
        $__internal_c7f360edd596a93b961a6ed75193c48b5aeab291de6b9f8293235a429122200c->leave($__internal_c7f360edd596a93b961a6ed75193c48b5aeab291de6b9f8293235a429122200c_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_398a61078e9438180f9141e0fc8bcb194d334d6760a7342a5c7bce0ce4e3c1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a61078e9438180f9141e0fc8bcb194d334d6760a7342a5c7bce0ce4e3c1b4->enter($__internal_398a61078e9438180f9141e0fc8bcb194d334d6760a7342a5c7bce0ce4e3c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c214d682200dfdeb7e4339535cb0a6f084c65bdc30b811f23ed383cded27ef26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c214d682200dfdeb7e4339535cb0a6f084c65bdc30b811f23ed383cded27ef26->enter($__internal_c214d682200dfdeb7e4339535cb0a6f084c65bdc30b811f23ed383cded27ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_c214d682200dfdeb7e4339535cb0a6f084c65bdc30b811f23ed383cded27ef26->leave($__internal_c214d682200dfdeb7e4339535cb0a6f084c65bdc30b811f23ed383cded27ef26_prof);

        
        $__internal_398a61078e9438180f9141e0fc8bcb194d334d6760a7342a5c7bce0ce4e3c1b4->leave($__internal_398a61078e9438180f9141e0fc8bcb194d334d6760a7342a5c7bce0ce4e3c1b4_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_829769cfe04e81b25673fc290bb9453f291a9a6bcfafb9872960fbd41c027fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829769cfe04e81b25673fc290bb9453f291a9a6bcfafb9872960fbd41c027fa9->enter($__internal_829769cfe04e81b25673fc290bb9453f291a9a6bcfafb9872960fbd41c027fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6cf886401e45c3ed4b6af150f1c7c5ae8c4f12311467bee8d302e70bb6ff5265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf886401e45c3ed4b6af150f1c7c5ae8c4f12311467bee8d302e70bb6ff5265->enter($__internal_6cf886401e45c3ed4b6af150f1c7c5ae8c4f12311467bee8d302e70bb6ff5265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_6cf886401e45c3ed4b6af150f1c7c5ae8c4f12311467bee8d302e70bb6ff5265->leave($__internal_6cf886401e45c3ed4b6af150f1c7c5ae8c4f12311467bee8d302e70bb6ff5265_prof);

        
        $__internal_829769cfe04e81b25673fc290bb9453f291a9a6bcfafb9872960fbd41c027fa9->leave($__internal_829769cfe04e81b25673fc290bb9453f291a9a6bcfafb9872960fbd41c027fa9_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_96c90d51d3a31292ea870039b7cf519fa6ada36beb0399cf8d486eb24503d382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c90d51d3a31292ea870039b7cf519fa6ada36beb0399cf8d486eb24503d382->enter($__internal_96c90d51d3a31292ea870039b7cf519fa6ada36beb0399cf8d486eb24503d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d4f47900d323581c3458018ed17e56834db26950ae41307e43b79d1f2ab98552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f47900d323581c3458018ed17e56834db26950ae41307e43b79d1f2ab98552->enter($__internal_d4f47900d323581c3458018ed17e56834db26950ae41307e43b79d1f2ab98552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_d4f47900d323581c3458018ed17e56834db26950ae41307e43b79d1f2ab98552->leave($__internal_d4f47900d323581c3458018ed17e56834db26950ae41307e43b79d1f2ab98552_prof);

        
        $__internal_96c90d51d3a31292ea870039b7cf519fa6ada36beb0399cf8d486eb24503d382->leave($__internal_96c90d51d3a31292ea870039b7cf519fa6ada36beb0399cf8d486eb24503d382_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0e2d6e86fa547bbbf376543901faf0d90b26eb0a27bd00f298738783a8f64284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2d6e86fa547bbbf376543901faf0d90b26eb0a27bd00f298738783a8f64284->enter($__internal_0e2d6e86fa547bbbf376543901faf0d90b26eb0a27bd00f298738783a8f64284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d9d7d13a5e2a390cf758da63a72d3c72dfee27d7ece76860c7b08b73001dc1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d7d13a5e2a390cf758da63a72d3c72dfee27d7ece76860c7b08b73001dc1f7->enter($__internal_d9d7d13a5e2a390cf758da63a72d3c72dfee27d7ece76860c7b08b73001dc1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9d7d13a5e2a390cf758da63a72d3c72dfee27d7ece76860c7b08b73001dc1f7->leave($__internal_d9d7d13a5e2a390cf758da63a72d3c72dfee27d7ece76860c7b08b73001dc1f7_prof);

        
        $__internal_0e2d6e86fa547bbbf376543901faf0d90b26eb0a27bd00f298738783a8f64284->leave($__internal_0e2d6e86fa547bbbf376543901faf0d90b26eb0a27bd00f298738783a8f64284_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c44f944618aa71909c81ba201dbbbb6c16f0eb84d012484e480279bff9871df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44f944618aa71909c81ba201dbbbb6c16f0eb84d012484e480279bff9871df2->enter($__internal_c44f944618aa71909c81ba201dbbbb6c16f0eb84d012484e480279bff9871df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d818fcd1e5b43f3d5eca8549233d4468700d32cc07de38c5af4d70832e91c6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d818fcd1e5b43f3d5eca8549233d4468700d32cc07de38c5af4d70832e91c6b5->enter($__internal_d818fcd1e5b43f3d5eca8549233d4468700d32cc07de38c5af4d70832e91c6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d818fcd1e5b43f3d5eca8549233d4468700d32cc07de38c5af4d70832e91c6b5->leave($__internal_d818fcd1e5b43f3d5eca8549233d4468700d32cc07de38c5af4d70832e91c6b5_prof);

        
        $__internal_c44f944618aa71909c81ba201dbbbb6c16f0eb84d012484e480279bff9871df2->leave($__internal_c44f944618aa71909c81ba201dbbbb6c16f0eb84d012484e480279bff9871df2_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_062f91bf905d8066c123e7e9305ebe31954b6b2d0f10f66fc8ec6e781816c5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062f91bf905d8066c123e7e9305ebe31954b6b2d0f10f66fc8ec6e781816c5a4->enter($__internal_062f91bf905d8066c123e7e9305ebe31954b6b2d0f10f66fc8ec6e781816c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b314bb6fd458cb0c8159578a1cf616616531401b4c950c0b1e600274170cbb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b314bb6fd458cb0c8159578a1cf616616531401b4c950c0b1e600274170cbb33->enter($__internal_b314bb6fd458cb0c8159578a1cf616616531401b4c950c0b1e600274170cbb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b314bb6fd458cb0c8159578a1cf616616531401b4c950c0b1e600274170cbb33->leave($__internal_b314bb6fd458cb0c8159578a1cf616616531401b4c950c0b1e600274170cbb33_prof);

        
        $__internal_062f91bf905d8066c123e7e9305ebe31954b6b2d0f10f66fc8ec6e781816c5a4->leave($__internal_062f91bf905d8066c123e7e9305ebe31954b6b2d0f10f66fc8ec6e781816c5a4_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3636396d72a547692874bad88ea25cfbb983500093ffb8c6cf838f3f6de10880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3636396d72a547692874bad88ea25cfbb983500093ffb8c6cf838f3f6de10880->enter($__internal_3636396d72a547692874bad88ea25cfbb983500093ffb8c6cf838f3f6de10880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_947bd3d1e4978ecedcc9d01926214366e769d7bf62e53fb378c3cadb7fc88c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947bd3d1e4978ecedcc9d01926214366e769d7bf62e53fb378c3cadb7fc88c0e->enter($__internal_947bd3d1e4978ecedcc9d01926214366e769d7bf62e53fb378c3cadb7fc88c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_947bd3d1e4978ecedcc9d01926214366e769d7bf62e53fb378c3cadb7fc88c0e->leave($__internal_947bd3d1e4978ecedcc9d01926214366e769d7bf62e53fb378c3cadb7fc88c0e_prof);

        
        $__internal_3636396d72a547692874bad88ea25cfbb983500093ffb8c6cf838f3f6de10880->leave($__internal_3636396d72a547692874bad88ea25cfbb983500093ffb8c6cf838f3f6de10880_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_63c3cfde0097df3a9f6a64f3fd43bd824a350ccdc2596712459853a62858dd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c3cfde0097df3a9f6a64f3fd43bd824a350ccdc2596712459853a62858dd4d->enter($__internal_63c3cfde0097df3a9f6a64f3fd43bd824a350ccdc2596712459853a62858dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eff23a6880670a7271db4fc2387350fa66a3b3c3be178068cdedf356e7bb00e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff23a6880670a7271db4fc2387350fa66a3b3c3be178068cdedf356e7bb00e1->enter($__internal_eff23a6880670a7271db4fc2387350fa66a3b3c3be178068cdedf356e7bb00e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_eff23a6880670a7271db4fc2387350fa66a3b3c3be178068cdedf356e7bb00e1->leave($__internal_eff23a6880670a7271db4fc2387350fa66a3b3c3be178068cdedf356e7bb00e1_prof);

        
        $__internal_63c3cfde0097df3a9f6a64f3fd43bd824a350ccdc2596712459853a62858dd4d->leave($__internal_63c3cfde0097df3a9f6a64f3fd43bd824a350ccdc2596712459853a62858dd4d_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9cefed6201af05d3463a60e0f25e4e207b5695702e2ad92a3081642eeeb4d3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cefed6201af05d3463a60e0f25e4e207b5695702e2ad92a3081642eeeb4d3dd->enter($__internal_9cefed6201af05d3463a60e0f25e4e207b5695702e2ad92a3081642eeeb4d3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_251a2ac1597d8fd164b2992907475af5b96b2f2d66849d9b490d35f7753961ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251a2ac1597d8fd164b2992907475af5b96b2f2d66849d9b490d35f7753961ca->enter($__internal_251a2ac1597d8fd164b2992907475af5b96b2f2d66849d9b490d35f7753961ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_251a2ac1597d8fd164b2992907475af5b96b2f2d66849d9b490d35f7753961ca->leave($__internal_251a2ac1597d8fd164b2992907475af5b96b2f2d66849d9b490d35f7753961ca_prof);

        
        $__internal_9cefed6201af05d3463a60e0f25e4e207b5695702e2ad92a3081642eeeb4d3dd->leave($__internal_9cefed6201af05d3463a60e0f25e4e207b5695702e2ad92a3081642eeeb4d3dd_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e740c285e858a71411f2e9a3d0e181abf0b8bb7267f3d09152d15d96bbdb1db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e740c285e858a71411f2e9a3d0e181abf0b8bb7267f3d09152d15d96bbdb1db7->enter($__internal_e740c285e858a71411f2e9a3d0e181abf0b8bb7267f3d09152d15d96bbdb1db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_21f505f5c44272b6fef0a5ab86d8f195b33acde49eae2ddd46d7c6b00ca327b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f505f5c44272b6fef0a5ab86d8f195b33acde49eae2ddd46d7c6b00ca327b8->enter($__internal_21f505f5c44272b6fef0a5ab86d8f195b33acde49eae2ddd46d7c6b00ca327b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_21f505f5c44272b6fef0a5ab86d8f195b33acde49eae2ddd46d7c6b00ca327b8->leave($__internal_21f505f5c44272b6fef0a5ab86d8f195b33acde49eae2ddd46d7c6b00ca327b8_prof);

        
        $__internal_e740c285e858a71411f2e9a3d0e181abf0b8bb7267f3d09152d15d96bbdb1db7->leave($__internal_e740c285e858a71411f2e9a3d0e181abf0b8bb7267f3d09152d15d96bbdb1db7_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/loctestx.com/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
