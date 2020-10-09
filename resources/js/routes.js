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
            }
        ]
    },
];
