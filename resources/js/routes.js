export const routes = [
    {
        // MAIN LAYOUT
        path: '/',
        name: 'main',
        component: () => import('./Main.Vue'),

    },
    {
        //FULL PAGE LAYOUT
        path: '/page',
        name: 'full',
        component: () => import('./FullPage.vue'),
        children: [
            {
                path: '/full/login',
                name: 'login',
                component: () => import('./views/login/Login.vue')
            }
        ]
    }
];
