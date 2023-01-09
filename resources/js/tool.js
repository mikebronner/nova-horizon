Nova.booting((Vue, router, store) =>
{
    router.addRoutes([
        {
            name: 'nova-horizon',
            path: '/nova-horizon',
            component: require('./components/Tool'),
        },
    ])
})
