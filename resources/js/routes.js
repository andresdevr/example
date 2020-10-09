export const routes = [
    {
        // MAIN LAYOUT
        path: '/',
        name: 'main',
        component: () => import('./layouts/Main.vue'),

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
                path: '/page/*',
                name: 'not found',
                component: () => import('./views/errors/404.vue')
            }
        ]
    },
    {
        path: '*',
        name: 'home',
        component: () => import('./layouts/Home.vue')
    }
];
