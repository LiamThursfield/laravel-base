<script>
    /**
     * This chunk of code - to include Laravel routes in VueJS - is written by Santiago Argilla.
     * https://medium.com/@sargilla/laravel-named-routes-in-vue-js-components-7b03e96bede8
     */
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'appName'   => config('app.name', 'LaravelBaseApp'),
        'baseUrl'   => url('/'),
        'routes'    => collect(\Route::getRoutes())->mapWithKeys(function ($route) { return [$route->getName() => $route->uri()]; }),
        'user'      => \Auth::user()
    ]) !!};
</script>