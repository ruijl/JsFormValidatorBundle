<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$controllerClass = 'Fp\JsFormValidatorBundle\Tests\TestBundles\DefaultTestBundle\Controller\FunctionalTestsController';

$collection->add(
    'fp_js_form_validator_test_levels',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/levels',
        array(
            '_controller' => $controllerClass . '::levelsAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_translations',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/translations/{type}',
        array(
            '_controller' => $controllerClass . '::translationAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_groups_getters',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/ggc/{type}/{js}',
        array(
            '_controller' => $controllerClass . '::groupsGettersCascadeAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_basic_constraints',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/basic_constraints/{isValid}',
        array(
            '_controller' => $controllerClass . '::basicConstraintsAction',
        )
    )
);
$collection->add(
    'fp_js_form_validator_test_transformers',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/transformers',
        array(
            '_controller' => $controllerClass . '::transformersAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_listeners',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/listeners/{mode}',
        array(
            '_controller' => $controllerClass . '::onValidateListenersAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_part',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/part',
        array(
            '_controller' => $controllerClass . '::partOfFormAction',
        )
    )
);

$collection->add(
    'fp_js_form_validator_test_empty',
    new Route(
        '/fp_js_form_validator/javascript_unit_test/empty',
        array(
            '_controller' => $controllerClass . '::emptyElementsAction',
        )
    )
);

return $collection;