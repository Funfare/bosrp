<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class OrganizationViewComposer
{
    /**
     * The user repository implementation.
     *
     * @var Request
     */
    protected $request;

    /**
     * Create a new profile composer.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('currentOrganization', $this->request->route()->parameter('organization'));
    }
}
