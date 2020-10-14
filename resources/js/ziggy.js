    var Ziggy = {
        namedRoutes: {"dusk.login":{"uri":"_dusk\/login\/{userId}\/{guard?}","methods":["GET","HEAD"],"domain":null},"dusk.logout":{"uri":"_dusk\/logout\/{guard?}","methods":["GET","HEAD"],"domain":null},"dusk.user":{"uri":"_dusk\/user\/{guard?}","methods":["GET","HEAD"],"domain":null},"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"password\/reset","methods":["POST"],"domain":null},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"],"domain":null},"verification.notice":{"uri":"email\/verify","methods":["GET","HEAD"],"domain":null},"verification.verify":{"uri":"email\/verify\/{id}\/{hash}","methods":["GET","HEAD"],"domain":null},"verification.resend":{"uri":"email\/resend","methods":["POST"],"domain":null},"products.index":{"uri":"ajax\/products","methods":["GET","HEAD"],"domain":null},"products.store":{"uri":"ajax\/products","methods":["POST"],"domain":null},"products.show":{"uri":"ajax\/products\/{product}","methods":["GET","HEAD"],"domain":null},"products.update":{"uri":"ajax\/products\/{product}","methods":["PUT","PATCH"],"domain":null},"products.destroy":{"uri":"ajax\/products\/{product}","methods":["DELETE"],"domain":null},"users.index":{"uri":"ajax\/users","methods":["GET","HEAD"],"domain":null},"users.store":{"uri":"ajax\/users","methods":["POST"],"domain":null},"users.show":{"uri":"ajax\/users\/{user}","methods":["GET","HEAD"],"domain":null},"users.update":{"uri":"ajax\/users\/{user}","methods":["PUT","PATCH"],"domain":null},"users.destroy":{"uri":"ajax\/users\/{user}","methods":["DELETE"],"domain":null},"permissions.index":{"uri":"ajax\/permissions","methods":["GET","HEAD"],"domain":null},"app":{"uri":"{any}","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://erp.test/',
        baseProtocol: 'http',
        baseDomain: 'erp.test',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
