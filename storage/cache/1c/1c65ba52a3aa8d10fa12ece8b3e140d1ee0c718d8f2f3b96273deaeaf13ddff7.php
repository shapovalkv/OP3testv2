<?php

/* extension/payment/emspay.twig */
class __TwigTemplate_f921aad7caff104aa9abd5294956c9d977304ec796121487bf80008332093ae1 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-ems\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i>
                </button>
                <a href=\"";
        // line 10
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\"
                   class=\"btn btn-default\"><i class=\"fa fa-reply\"></i>
                </a>
            </div>
            <h1>";
        // line 14
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 24
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 25
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["info_message"]) ? $context["info_message"] : null)) {
            // line 31
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["info_message"]) ? $context["info_message"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 35
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo (isset($context["text_edit_ems"]) ? $context["text_edit_ems"] : null);
        echo "</h3>
            </div>

            <div class=\"panel-body\">
                <form action=\"";
        // line 42
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ems\"
                      class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems-api-key\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["info_help_api_key"]) ? $context["info_help_api_key"] : null);
        echo "\">
                                ";
        // line 49
        echo (isset($context["entry_ems_api_key"]) ? $context["entry_ems_api_key"] : null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_";
        // line 53
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_api_key\" id=\"input-ems-api-key\"
                                   value=\"";
        // line 54
        echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_api_key"), array(), "array");
        echo "\" size=\"50\" class=\"form-control\"
                                   placeholder=\"";
        // line 55
        echo (isset($context["info_help_api_key"]) ? $context["info_help_api_key"] : null);
        echo "\"/>
                            ";
        // line 56
        if ((isset($context["error_missing_api_key"]) ? $context["error_missing_api_key"] : null)) {
            // line 57
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_missing_api_key"]) ? $context["error_missing_api_key"] : null);
            echo "</div>
                            ";
        }
        // line 59
        echo "                        </div>
                    </div>

                    ";
        // line 62
        if (((isset($context["emspay_module"]) ? $context["emspay_module"] : null) == "emspay_klarna")) {
            // line 63
            echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-klarna-test-api-key\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 65
            echo (isset($context["info_help_klarna_test_api_key"]) ? $context["info_help_klarna_test_api_key"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 66
            echo (isset($context["entry_klarna_test_api_key"]) ? $context["entry_klarna_test_api_key"] : null);
            echo "
\t\t\t\t\t\t\t\t</span>
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_";
            // line 70
            echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
            echo "_test_api_key\" id=\"input-klarna-test-api-key\"
                                       value=\"";
            // line 71
            echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_test_api_key"), array(), "array");
            echo "\" size=\"50\" class=\"form-control\"
                                       placeholder=\"";
            // line 72
            echo (isset($context["info_help_klarna_test_api_key"]) ? $context["info_help_klarna_test_api_key"] : null);
            echo "\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-klarna-ip-filter\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 77
            echo (isset($context["info_help_klarna_ip_filter"]) ? $context["info_help_klarna_ip_filter"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 78
            echo (isset($context["entry_klarna_ip_filter"]) ? $context["entry_klarna_ip_filter"] : null);
            echo "
\t\t\t\t\t\t\t\t</span>
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_";
            // line 82
            echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
            echo "_ip_filter\"
                                       value=\"";
            // line 83
            echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_ip_filter"), array(), "array");
            echo "\"
                                       placeholder=\"";
            // line 84
            echo (isset($context["ems_klarna_ip_filter"]) ? $context["ems_klarna_ip_filter"] : null);
            echo "\"
                                       id=\"input-klarna-ip-filter\" class=\"form-control\" />
                            </div>
                        </div>
                    ";
        }
        // line 89
        echo "
                    ";
        // line 90
        if (((isset($context["emspay_module"]) ? $context["emspay_module"] : null) == "emspay_afterpay")) {
            // line 91
            echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-ems-afterpay-test-api-key\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 93
            echo (isset($context["info_help_afterpay_test_api_key"]) ? $context["info_help_afterpay_test_api_key"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 94
            echo (isset($context["entry_afterpay_test_api_key"]) ? $context["entry_afterpay_test_api_key"] : null);
            echo "
\t\t\t\t\t\t\t\t</span>
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_";
            // line 98
            echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
            echo "_test_api_key\" id=\"input-ems-afterpay-test-api-key\"
                                       value=\"";
            // line 99
            echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_test_api_key"), array(), "array");
            echo "\" size=\"50\" class=\"form-control\"
                                       placeholder=\"";
            // line 100
            echo (isset($context["info_help_afterpay_test_api_key"]) ? $context["info_help_afterpay_test_api_key"] : null);
            echo "\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-afterpay-ip-filter\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 105
            echo (isset($context["info_help_afterpay_ip_filter"]) ? $context["info_help_afterpay_ip_filter"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 106
            echo (isset($context["entry_afterpay_ip_filter"]) ? $context["entry_afterpay_ip_filter"] : null);
            echo "
\t\t\t\t\t\t\t\t</span>
                            </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_";
            // line 110
            echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
            echo "_ip_filter\"
                                       value=\"";
            // line 111
            echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_ip_filter"), array(), "array");
            echo "\"
                                       placeholder=\"";
            // line 112
            echo (isset($context["ems_afterpay_ip_filter"]) ? $context["ems_afterpay_ip_filter"] : null);
            echo "\"
                                       id=\"input-afterpay-ip-filter\" class=\"form-control\" />
                            </div>
                        </div>
                    ";
        }
        // line 117
        echo "
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_new\">";
        // line 120
        echo (isset($context["entry_order_new"]) ? $context["entry_order_new"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 122
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_new\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_new\">
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 125
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_new"), array(), "array"))) {
                // line 126
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 127
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 129
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 131
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_processing\">";
        // line 138
        echo (isset($context["entry_order_processing"]) ? $context["entry_order_processing"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 140
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_processing\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_processing\">
                                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 143
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_processing"), array(), "array"))) {
                // line 144
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 145
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 147
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 149
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_completed\">";
        // line 156
        echo (isset($context["entry_order_completed"]) ? $context["entry_order_completed"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 158
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_completed\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_completed\">
                                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 161
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_completed"), array(), "array"))) {
                // line 162
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 163
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 165
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 167
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_expired\">";
        // line 174
        echo (isset($context["entry_order_expired"]) ? $context["entry_order_expired"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 176
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_expired\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_expired\">
                                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 179
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_expired"), array(), "array"))) {
                // line 180
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 181
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 183
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 185
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_cancelled\">";
        // line 192
        echo (isset($context["entry_order_cancelled"]) ? $context["entry_order_cancelled"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 194
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_cancelled\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_cancelled\">
                                ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 197
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_cancelled"), array(), "array"))) {
                // line 198
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 199
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 201
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 203
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_error\">";
        // line 210
        echo (isset($context["entry_order_error"]) ? $context["entry_order_error"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 212
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_error\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_error\">
                                ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 215
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_error"), array(), "array"))) {
                // line 216
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 217
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 219
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 221
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems_order_status_id_captured\">";
        // line 228
        echo (isset($context["entry_order_captured"]) ? $context["entry_order_captured"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 231
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_order_status_id_captured\" class=\"form-control\"
                                    id=\"input-ems_order_status_id_captured\">
                                ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 234
            echo "                                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_order_status_id_captured"), array(), "array"))) {
                // line 235
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\"
                                                selected=\"selected\">";
                // line 236
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            } else {
                // line 238
                echo "                                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                                    ";
            }
            // line 240
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-sort-order\">";
        // line 247
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_";
        // line 250
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_sort_order\"
                                   value=\"";
        // line 251
        echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_sort_order"), array(), "array");
        echo "\"
                                   placeholder=\"";
        // line 252
        echo (isset($context["ems_sort_order"]) ? $context["ems_sort_order"] : null);
        echo "\"
                                   id=\"input-sort-order\" class=\"form-control\"/>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems-total\">
                             <span data-toggle=\"tooltip\" title=\"";
        // line 260
        echo (isset($context["info_help_total"]) ? $context["info_help_total"] : null);
        echo "\">
                                   ";
        // line 261
        echo (isset($context["entry_ems_total"]) ? $context["entry_ems_total"] : null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"payment_";
        // line 265
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_total\"
                                   value=\"";
        // line 266
        echo $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_total"), array(), "array");
        echo "\"
                                   placeholder=\"";
        // line 267
        echo (isset($context["info_help_total"]) ? $context["info_help_total"] : null);
        echo "\"
                                   id=\"input-ems-total\" class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"
                               for=\"input-ems-status\">";
        // line 273
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <select name=\"payment_";
        // line 276
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_status\" id=\"input-ems-status\" class=\"form-control\">
                                ";
        // line 277
        if ($this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_status"), array(), "array")) {
            // line 278
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 279
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 281
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 282
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 284
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 288
        echo (isset($context["entry_cacert"]) ? $context["entry_cacert"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"payment_";
        // line 291
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_bundle_cacert\" value=\"1\"
                                        ";
        // line 292
        if ($this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_bundle_cacert"), array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo "  />
                                ";
        // line 293
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
                            </label>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"payment_";
        // line 296
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_bundle_cacert\" value=\"0\"
                                        ";
        // line 297
        if ( !$this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_bundle_cacert"), array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo "  />
                                ";
        // line 298
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 303
        echo (isset($context["entry_send_webhook"]) ? $context["entry_send_webhook"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"payment_";
        // line 306
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_send_webhook\" value=\"1\"
                                        ";
        // line 307
        if (((null === $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_send_webhook"), array(), "array")) || $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_send_webhook"), array(), "array"))) {
            echo " checked=\"checked\" ";
        }
        echo "  />
                                ";
        // line 308
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
                            </label>
                            <label class=\"radio-inline\">
                                <input type=\"radio\" name=\"payment_";
        // line 311
        echo (isset($context["emspay_module"]) ? $context["emspay_module"] : null);
        echo "_send_webhook\" value=\"0\"
                                        ";
        // line 312
        if (( !(null === $this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_send_webhook"), array(), "array")) &&  !$this->getAttribute($context, (("payment_" . (isset($context["emspay_module"]) ? $context["emspay_module"] : null)) . "_send_webhook"), array(), "array"))) {
            echo " checked=\"checked\" ";
        }
        echo "  />
                                ";
        // line 313
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 322
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/emspay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  798 => 322,  786 => 313,  780 => 312,  776 => 311,  770 => 308,  764 => 307,  760 => 306,  754 => 303,  746 => 298,  740 => 297,  736 => 296,  730 => 293,  724 => 292,  720 => 291,  714 => 288,  708 => 284,  703 => 282,  698 => 281,  693 => 279,  688 => 278,  686 => 277,  682 => 276,  676 => 273,  667 => 267,  663 => 266,  659 => 265,  652 => 261,  648 => 260,  637 => 252,  633 => 251,  629 => 250,  623 => 247,  615 => 241,  609 => 240,  601 => 238,  596 => 236,  591 => 235,  588 => 234,  584 => 233,  579 => 231,  573 => 228,  565 => 222,  559 => 221,  551 => 219,  546 => 217,  541 => 216,  538 => 215,  534 => 214,  529 => 212,  524 => 210,  516 => 204,  510 => 203,  502 => 201,  497 => 199,  492 => 198,  489 => 197,  485 => 196,  480 => 194,  475 => 192,  467 => 186,  461 => 185,  453 => 183,  448 => 181,  443 => 180,  440 => 179,  436 => 178,  431 => 176,  426 => 174,  418 => 168,  412 => 167,  404 => 165,  399 => 163,  394 => 162,  391 => 161,  387 => 160,  382 => 158,  377 => 156,  369 => 150,  363 => 149,  355 => 147,  350 => 145,  345 => 144,  342 => 143,  338 => 142,  333 => 140,  328 => 138,  320 => 132,  314 => 131,  306 => 129,  301 => 127,  296 => 126,  293 => 125,  289 => 124,  284 => 122,  279 => 120,  274 => 117,  266 => 112,  262 => 111,  258 => 110,  251 => 106,  247 => 105,  239 => 100,  235 => 99,  231 => 98,  224 => 94,  220 => 93,  216 => 91,  214 => 90,  211 => 89,  203 => 84,  199 => 83,  195 => 82,  188 => 78,  184 => 77,  176 => 72,  172 => 71,  168 => 70,  161 => 66,  157 => 65,  153 => 63,  151 => 62,  146 => 59,  140 => 57,  138 => 56,  134 => 55,  130 => 54,  126 => 53,  119 => 49,  115 => 48,  106 => 42,  99 => 38,  94 => 35,  86 => 31,  84 => 30,  81 => 29,  73 => 25,  71 => 24,  64 => 19,  53 => 17,  49 => 16,  44 => 14,  35 => 10,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-ems" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i>*/
/*                 </button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}"*/
/*                    class="btn btn-default"><i class="fa fa-reply"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if info_message %}*/
/*             <div class="alert alert-info"><i class="fa fa-exclamation-circle"></i> {{ info_message }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit_ems }}</h3>*/
/*             </div>*/
/* */
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-ems"*/
/*                       class="form-horizontal">*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems-api-key">*/
/*                             <span data-toggle="tooltip" title="{{ info_help_api_key }}">*/
/*                                 {{ entry_ems_api_key }}*/
/*                             </span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_{{ emspay_module }}_api_key" id="input-ems-api-key"*/
/*                                    value="{{ _context['payment_'~emspay_module~'_api_key'] }}" size="50" class="form-control"*/
/*                                    placeholder="{{ info_help_api_key }}"/>*/
/*                             {% if error_missing_api_key %}*/
/*                                 <div class="text-danger">{{ error_missing_api_key }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {% if emspay_module == 'emspay_klarna' %}*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-klarna-test-api-key">*/
/* 								<span data-toggle="tooltip" title="{{ info_help_klarna_test_api_key }}">*/
/* 									{{ entry_klarna_test_api_key }}*/
/* 								</span>*/
/*                             </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_{{ emspay_module }}_test_api_key" id="input-klarna-test-api-key"*/
/*                                        value="{{ _context['payment_'~emspay_module~'_test_api_key'] }}" size="50" class="form-control"*/
/*                                        placeholder="{{ info_help_klarna_test_api_key }}"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-klarna-ip-filter">*/
/* 								<span data-toggle="tooltip" title="{{ info_help_klarna_ip_filter }}">*/
/* 									{{ entry_klarna_ip_filter }}*/
/* 								</span>*/
/*                             </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_{{ emspay_module }}_ip_filter"*/
/*                                        value="{{ _context['payment_'~emspay_module~'_ip_filter'] }}"*/
/*                                        placeholder="{{ ems_klarna_ip_filter }}"*/
/*                                        id="input-klarna-ip-filter" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     {% if emspay_module == 'emspay_afterpay' %}*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-ems-afterpay-test-api-key">*/
/* 								<span data-toggle="tooltip" title="{{ info_help_afterpay_test_api_key }}">*/
/* 									{{ entry_afterpay_test_api_key }}*/
/* 								</span>*/
/*                             </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_{{ emspay_module }}_test_api_key" id="input-ems-afterpay-test-api-key"*/
/*                                        value="{{ _context['payment_'~emspay_module~'_test_api_key'] }}" size="50" class="form-control"*/
/*                                        placeholder="{{ info_help_afterpay_test_api_key }}"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-afterpay-ip-filter">*/
/* 								<span data-toggle="tooltip" title="{{ info_help_afterpay_ip_filter }}">*/
/* 									{{ entry_afterpay_ip_filter }}*/
/* 								</span>*/
/*                             </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_{{ emspay_module }}_ip_filter"*/
/*                                        value="{{ _context['payment_'~emspay_module~'_ip_filter'] }}"*/
/*                                        placeholder="{{ ems_afterpay_ip_filter }}"*/
/*                                        id="input-afterpay-ip-filter" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_new">{{ entry_order_new }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_new" class="form-control"*/
/*                                     id="input-ems_order_status_id_new">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_new'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_processing">{{ entry_order_processing }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_processing" class="form-control"*/
/*                                     id="input-ems_order_status_id_processing">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_processing'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_completed">{{ entry_order_completed }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_completed" class="form-control"*/
/*                                     id="input-ems_order_status_id_completed">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_completed'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_expired">{{ entry_order_expired }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_expired" class="form-control"*/
/*                                     id="input-ems_order_status_id_expired">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_expired'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_cancelled">{{ entry_order_cancelled }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_cancelled" class="form-control"*/
/*                                     id="input-ems_order_status_id_cancelled">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_cancelled'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_error">{{ entry_order_error }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_error" class="form-control"*/
/*                                     id="input-ems_order_status_id_error">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_error'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems_order_status_id_captured">{{ entry_order_captured }}*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_order_status_id_captured" class="form-control"*/
/*                                     id="input-ems_order_status_id_captured">*/
/*                                 {% for order_status in order_statuses %}*/
/*                                     {% if order_status.order_status_id == _context['payment_' ~ emspay_module ~ '_order_status_id_captured'] %}*/
/*                                         <option value="{{ order_status.order_status_id }}"*/
/*                                                 selected="selected">{{ order_status.name }}</option>*/
/*                                     {% else %}*/
/*                                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-sort-order">{{ entry_sort_order }}*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_{{ emspay_module }}_sort_order"*/
/*                                    value="{{ _context['payment_'~emspay_module~'_sort_order'] }}"*/
/*                                    placeholder="{{ ems_sort_order }}"*/
/*                                    id="input-sort-order" class="form-control"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems-total">*/
/*                              <span data-toggle="tooltip" title="{{ info_help_total }}">*/
/*                                    {{ entry_ems_total }}*/
/*                             </span>*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="payment_{{ emspay_module }}_total"*/
/*                                    value="{{ _context['payment_'~emspay_module~'_total'] }}"*/
/*                                    placeholder="{{ info_help_total }}"*/
/*                                    id="input-ems-total" class="form-control"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"*/
/*                                for="input-ems-status">{{ entry_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="payment_{{ emspay_module }}_status" id="input-ems-status" class="form-control">*/
/*                                 {% if _context['payment_'~emspay_module~'_status'] %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_cacert }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <label class="radio-inline">*/
/*                                 <input type="radio" name="payment_{{ emspay_module }}_bundle_cacert" value="1"*/
/*                                         {% if _context['payment_'~emspay_module~'_bundle_cacert'] %} checked="checked" {% endif %}  />*/
/*                                 {{ text_yes }}*/
/*                             </label>*/
/*                             <label class="radio-inline">*/
/*                                 <input type="radio" name="payment_{{ emspay_module }}_bundle_cacert" value="0"*/
/*                                         {% if not _context['payment_'~emspay_module~'_bundle_cacert'] %} checked="checked" {% endif %}  />*/
/*                                 {{ text_no }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_send_webhook }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <label class="radio-inline">*/
/*                                 <input type="radio" name="payment_{{ emspay_module }}_send_webhook" value="1"*/
/*                                         {% if _context['payment_'~emspay_module~'_send_webhook'] is null or _context['payment_'~emspay_module~'_send_webhook'] %} checked="checked" {% endif %}  />*/
/*                                 {{ text_yes }}*/
/*                             </label>*/
/*                             <label class="radio-inline">*/
/*                                 <input type="radio" name="payment_{{ emspay_module }}_send_webhook" value="0"*/
/*                                         {% if _context['payment_'~emspay_module~'_send_webhook'] is not null and not _context['payment_'~emspay_module~'_send_webhook'] %} checked="checked" {% endif %}  />*/
/*                                 {{ text_no }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
