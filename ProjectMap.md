## Admin Panel

    app/Http/Controllers/Admin
        ->DashboardController
        ->UserController
        ->ProductController
        ->CategoryController
        ->PostController
    
    app/Http/Middleware
        ->CheckRole

    app/Models/Admin
        ->Product
        ->Post
        ->Category
        ->User

    public/adminpanel
        ->css
        ->js
        ->img
        ->plugins

    resources/views/admin
        ->dashboard blade
        ->includes
            ->header blade
            ->footer blade
            ->sidebar blade
            ->topnavbar blade
            ->mainscripts blade
            ->preloader blade

        ->users
            ->all users blade
            ->add user blade
            ->edit user blade
            ->user profile blade

        ->product
            ->all products blade
            ->add product blade
            ->edit product blade
            ->product info blade
            
        ->post
            ->all posts blade
            ->add post blade
            ->edit post blade
            ->show post blade

        ->categories
            ->all categories blade
            ->add category blade
            ->edit category blade
            ->category info blade

    routes
        ->admin

-------------------------------------------------------------------------------------------
## User Interface

    app/Http/Controllers/User
        ->IndexController
        ->OpinionController

    app/Http/Middleware
        ->CheckUser

    app/User
        ->Cart

    public/userinterface
        ->css
        ->img
        ->js

    views
        ->search-results blade
    
    resources/views/user
        ->index blade
        ->includes
            ->header blade
            ->footer blade
            ->mainscripts blade
            ->navbar blade

        ->profiles
            ->show profile blade

        ->items
            ->kids blade
            ->women blade
            ->men blade

        ->carts
            ->show cart blade

------------------------------------------------------------------------------------------
## Dashboard Template Translation
    resources/lang/en AND resources/lang/ar
        ->Dashboard

-------------------------------------------------------------------------------------------
## User Interface Template Translation
    resources/lang/en AND resources/lang/ar
        ->UserIndex
