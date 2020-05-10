<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Tesserakt/Cours/cours.html.twig */
class __TwigTemplate_2bb0ea48e5dbc3ad22760806197bea45165df4ba02c397e09c86d5acc00890f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Cours/cours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Cours/cours.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-4.4.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/cours\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exercices\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
    <div class=\"page\">
        <div class=\"row\">
            <div class=\"content\" style=\"width: 100%\">
                <center>
                    <h1> Les cours disponibles</h1>
                </center>

                <div class=\"liste_de_cours\">
                    ";
        // line 41
        if (( !(isset($context["listeCours"]) || array_key_exists("listeCours", $context)) || twig_test_empty((isset($context["listeCours"]) || array_key_exists("listeCours", $context) ? $context["listeCours"] : (function () { throw new RuntimeError('Variable "listeCours" does not exist.', 41, $this->source); })())))) {
            // line 42
            echo "                        <p> Vous n'avez pas de cours diponible pour le moment ! </p>
                    ";
        } else {
            // line 44
            echo "                        <ul class=\"list-group\">
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCours"]) || array_key_exists("listeCours", $context) ? $context["listeCours"] : (function () { throw new RuntimeError('Variable "listeCours" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 46
                echo "                            <li onclick=\"window.location.href ='/cours/'+";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo ";\" class=\"list-group-item\" style=\"color: darkgray\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "title", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"col-4\">
                                        <img class=\"fit-picture\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/web/" . twig_get_attribute($this->env, $this->source, $context["cours"], "picturePath", [], "any", false, false, false, 52))), "html", null, true);
                echo "\">
                                    </div>

                                </div>
                            </li> ";
                // line 57
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        </ul>
                    ";
        }
        // line 60
        echo "                </div>

            </div>
        </div>
    </div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Tesserakt/Cours/cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  129 => 58,  123 => 57,  116 => 52,  110 => 49,  103 => 46,  99 => 45,  96 => 44,  92 => 42,  90 => 41,  53 => 7,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-4.4.1-dist/css/bootstrap.css') }}\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/cours\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exercices\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
    <div class=\"page\">
        <div class=\"row\">
            <div class=\"content\" style=\"width: 100%\">
                <center>
                    <h1> Les cours disponibles</h1>
                </center>

                <div class=\"liste_de_cours\">
                    {% if listeCours is not defined or listeCours is empty   %}
                        <p> Vous n'avez pas de cours diponible pour le moment ! </p>
                    {% else %}
                        <ul class=\"list-group\">
                            {% for cours in listeCours %}
                            <li onclick=\"window.location.href ='/cours/'+{{ cours.id }};\" class=\"list-group-item\" style=\"color: darkgray\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        {{ cours.title }}
                                    </div>
                                    <div class=\"col-4\">
                                        <img class=\"fit-picture\" src=\"{{ asset('assets/web/' ~ cours.picturePath) }}\">
                                    </div>

                                </div>
                            </li> {#TODO : add picture in row, col#}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </div>

            </div>
        </div>
    </div>

</body>
</html>", "Tesserakt/Cours/cours.html.twig", "C:\\Users\\robin\\Desktop\\ProjetM2\\ProjetAnnuelM2ESGI\\tesseraktWeb\\templates\\Tesserakt\\Cours\\cours.html.twig");
    }
}
