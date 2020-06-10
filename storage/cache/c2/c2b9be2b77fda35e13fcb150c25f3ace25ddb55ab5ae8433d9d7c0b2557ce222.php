<?php

/* default/template/extension/payment/emspay_klarnapaylater.twig */
class __TwigTemplate_a8083e54fb7a994b9868c76b406a459b24eff57af294ea415f500f91347054ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" id=\"klarna-form-payment\">
    <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"gender\">";
        // line 3
        echo (isset($context["text_please_select_gender"]) ? $context["text_please_select_gender"] : null);
        echo ":</label>
        <div class=\"col-sm-3\">
            <select name=\"gender\" class=\"form-control\">
                <option value=\"male\">";
        // line 6
        echo (isset($context["text_please_select_gender_male"]) ? $context["text_please_select_gender_male"] : null);
        echo "</option>
                <option value=\"female\">";
        // line 7
        echo (isset($context["text_please_select_gender_female"]) ? $context["text_please_select_gender_female"] : null);
        echo "</option>
            </select>
        </div>
    </div>

    <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"dob\">";
        // line 13
        echo (isset($context["text_please_enter_dob"]) ? $context["text_please_enter_dob"] : null);
        echo ":</label>
        <div class=\"col-sm-3\">
            <input type=\"text\" name=\"dob\" id=\"dob\" placeholder=\"dd-mm-yyyy\" class=\"form-control\"/>
        </div>
    </div>

    <div class=\"form-group pull-right\">
        <div class=\"right col-sm-3\">
            <input type=\"submit\" value=\"";
        // line 21
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"klarna-button-payment\" class=\"button btn btn-primary\"/>
        </div>
    </div>
</form>
<script type=\"text/javascript\"><!--
\$(document).delegate('#klarna-button-payment', 'click', function(e) {
    e.preventDefault();
    if (!\$('#dob').val().match(/^(0[1-9]|[12][0-9]|3[01])\\-(0[1-9]|1[012])\\-[0-9]{4}/)) {
        \$('#collapse-checkout-confirm .panel-body').prepend('<div class=\"alert alert-danger\">' + '";
        // line 29
        echo (isset($context["text_error_invalid_dob"]) ? $context["text_error_invalid_dob"] : null);
        echo "' + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
    } else {
        \$('#klarna-form-payment').submit();
    
    }
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/emspay_klarnapaylater.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  55 => 21,  44 => 13,  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <form action="{{ action }}" method="post" id="klarna-form-payment">*/
/*     <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="gender">{{ text_please_select_gender }}:</label>*/
/*         <div class="col-sm-3">*/
/*             <select name="gender" class="form-control">*/
/*                 <option value="male">{{ text_please_select_gender_male }}</option>*/
/*                 <option value="female">{{ text_please_select_gender_female }}</option>*/
/*             </select>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="dob">{{ text_please_enter_dob }}:</label>*/
/*         <div class="col-sm-3">*/
/*             <input type="text" name="dob" id="dob" placeholder="dd-mm-yyyy" class="form-control"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group pull-right">*/
/*         <div class="right col-sm-3">*/
/*             <input type="submit" value="{{ button_confirm }}" id="klarna-button-payment" class="button btn btn-primary"/>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* <script type="text/javascript"><!--*/
/* $(document).delegate('#klarna-button-payment', 'click', function(e) {*/
/*     e.preventDefault();*/
/*     if (!$('#dob').val().match(/^(0[1-9]|[12][0-9]|3[01])\-(0[1-9]|1[012])\-[0-9]{4}/)) {*/
/*         $('#collapse-checkout-confirm .panel-body').prepend('<div class="alert alert-danger">' + '{{ text_error_invalid_dob }}' + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*     } else {*/
/*         $('#klarna-form-payment').submit();*/
/*     */
/*     }*/
/* });*/
/* //--></script>*/
