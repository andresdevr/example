export const routes = [
    {
        // MAIN LAYOUT
        path: '/',
        name: 'main',
        component: () => import('./layouts/Main.vue'),
        children: [
            {
                path: '/home',
                name: 'home',
                component: () => import('./views/home/Home')
            },
            {
                path: '/users/list',
                name: 'users-list',
                component: () => import('./views/users/list/List')
            },
            {
                path: '/users/active',
                name: 'users-active',
                component: () => import('./views/users/active/Active')
            }
        ]

    },
    {
        //FULL PAGE LAYOUT
        path: '/page',
        name: 'full',
        component: () => import('./layouts/FullPage.vue'),
        children: [
            {
                path: '/page/login',
                name: 'login',
                component: () => import('./views/login/Login.vue')
            },
            {
                path: '/page/404',
                name: '404',
                component: () => import('./views/errors/404.vue')
            }
        ]
    },
    {
        path: '*',
        redirect: '/page/404',
        name: 'not found',
    }
];
