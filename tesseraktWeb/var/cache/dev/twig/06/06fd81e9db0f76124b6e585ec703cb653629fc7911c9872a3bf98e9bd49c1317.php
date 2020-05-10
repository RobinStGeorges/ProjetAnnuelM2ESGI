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

/* Tesserakt/Exercice/exercices.html.twig */
class __TwigTemplate_dcef5a56bab8686552a89f9e008b4e23bfc9aac22293e02dab4162cc3959224d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Exercice/exercices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Exercice/exercices.html.twig"));

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
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
    <div class=\"page\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"content\">
                    <h1> ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</h1>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"content\">
                    <p>test</p>
                </div>
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
        return "Tesserakt/Exercice/exercices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  53 => 7,  49 => 6,  43 => 2,);
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
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
    <div class=\"page\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"content\">
                    <h1> {{ title }}</h1>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"content\">
                    <p>test</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>", "Tesserakt/Exercice/exercices.html.twig", "C:\\Users\\robin\\Desktop\\tesseraktWeb\\templates\\Tesserakt\\Exercice\\exercices.html.twig");
    }
}
