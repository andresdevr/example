export default [
    {
        title: 'Inicio',
        icon: 'home',
        iconPack: 'fas',
        permissions: [],
        route: { name: 'home' },
        children: []
    },
    {
        title: 'Usuarios',
        icon: 'users',
        iconPack: 'fas',
        permissions: [],
        route: {},
        children: [
            {
                title: 'Lista',
                icon: 'list',
                iconPack: 'fas',
                permissions: [],
                route: { name: 'users-list' },
                children: []
            },
            {
                title: 'Sesiones activas',
                icon: 'plug',
                iconPack: 'fas',
                permissions: [],
                route: { name: 'users-active' },
                children: []
            }
        ]
    }
]