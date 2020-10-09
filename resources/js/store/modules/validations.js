export const validations = {
    namespaced: false,
    state: () => ({
        messages: [
            {
                key: 'failed',
                message: 'Estas credenciales no coinciden con nuestros registros.'
            },
            {
                key: 'throttle',
                message: 'Demasiados intentos de acceso. Por favor intente nuevamente en :value segundos.'
            },
            {
                key: 'throttled',
                message: 'Por favor espera antes de intentar de nuevo.'
            },
            {
                key: 'token',
                message: 'El token de recuperación de contraseña es inválido.'
            },
            {
                key: 'accepted',
                message: 'Este campo debe ser aceptado.'
            },
            {
                key: 'active_url',
                message: 'Esta no es una URL válida.'
            },
            {
                key: 'after',
                message: 'Debe ser una fecha después de :value.'
            },
            {
                key: 'after_or_equal',
                message: 'Debe ser una fecha después o igual a :value.'
            },
            {
                key: 'alpha',
                message: 'Este campo solo puede contener letras.'
            },
            {
                key: 'alpha_dash',
                message: 'Este campo solo puede contener letras, números, guiones y guiones bajos.'
            },
            {
                key: 'alpha_num',
                message: 'Este campo solo puede contener letras y números.'
            },
            {
                key: 'array',
                message: 'Este campo debe ser un array (colección).'
            },
            {
                key: 'before',
                message: 'Debe ser una fecha antes de :value.'
            },
            {
                key: 'before_or_equal',
                message: 'Debe ser una fecha anterior o igual a :value.'
            },
            {
                key: 'boolean',
                message: 'El campo debe ser verdadero o falso.'
            },
            {
                key: 'confirmed',
                message: 'La confirmación no coincide.'
            },
            {
                key: 'date',
                message: 'Esta no es una fecha válida.'
            },
            {
                key: 'date_equals',
                message: 'El campo debe ser una fecha igual a :value.'
            },
            {
                key: 'date_format',
                message: 'El campo no corresponde al formato :value.'
            },
            {
                key: 'different',
                message: 'Este valor deben ser diferente de :value.'
            },
            {
                key: 'digits',
                message: 'Debe tener :value dígitos.'
            },
            {
                key: 'digits_between',
                message: 'Debe tener entre :value y :value dígitos.'
            },
            {
                key: 'dimensions',
                message: 'Las dimensiones de esta imagen son inválidas.'
            },
            {
                key: 'distinct',
                message: 'El campo tiene un valor duplicado.'
            },
            {
                key: 'email',
                message: 'No es un correo válido.'
            },
            {
                key: 'ends_with',
                message: 'El valor no termina con el valor :value'
            },
            {
                key: 'exists',
                message: 'El valor seleccionado es inválido.'
            },
            {
                key: 'file',
                message: 'El campo debe ser un archivo.'
            },
            {
                key: 'filled',
                message: 'Este campo debe tener un valor.'
            },
            {
                key: 'gt.numeric',
                message: 'El valor del campo debe ser mayor que :value.'
            },
            {
                key: 'gt.file',
                message: 'El archivo debe ser mayor que :value'
            },
            {
                key: 'gt.string',
                message: 'El texto debe ser mayor de :value caracteres.'
            },
            {
                key: 'gt.array',
                message: 'El contenido debe tener mas de :value elementos.'
            },
            {
                key: 'gte.numeric',
                message: 'El valor debe ser mayor o igual que :value.'
            },
            {
                key: 'gte.file',
                message: 'El tamaño del archivo debe ser mayor o igual que :value kilobytes.'
            },
            {
                key: 'gte.string',
                message: 'El texto debe ser mayor o igual de :value caracteres.'
            },
            {
                key: 'gte.array',
                message: 'El contenido debe tener :value elementos o más.'
            },
            {
                key: 'image',
                message: 'Esta debe ser una imagen.'
            },
            {
                key: 'in',
                message: 'El valor seleccionado es inválido.'
            },
            {
                key: 'in_array',
                message: 'Este valor no existe en :value.'
            },
            {
                key: 'integer',
                message: 'Esto debe ser un entero.'
            },
            {
                key: 'ip',
                message: 'Debe ser una dirección IP válida.'
            },
            {
                key: 'ipv4',
                message: 'Debe ser una dirección IPv4 válida.'
            },
            {
                key: 'ipv6',
                message: 'Debe ser una dirección IPv6 válida.'
            },
            {
                key: 'json',
                message: 'Debe ser un texto válido en JSON.'
            },
            {
                key: 'lt.numeric',
                message: 'El valor debe ser menor que :value.'
            },
            {
                key: 'lt.file',
                message: 'El tamaño del archivo debe ser menor a :value.'
            },
            {
                key: 'lt.string',
                message: 'El texto debe ser menor de :value caracteres.'
            },
            {
                key: 'lt.array',
                message: 'El contenido debe tener menor de :value elementos.'
            },
            {
                key: 'lte.numeric',
                message: 'El valor debe ser menor o igual que :value.'
            },
            {
                key: 'lte.file',
                message: 'El tamaño del archivo debe ser menor o igual que :value.'
            },
            {
                key: 'lte.string',
                message: 'El texto debe ser menor o igual de :value caracteres.'
            },
            {
                key: 'lte.array',
                message: 'El contenido no debe tener más de :value elementos.'
            },
            {
                key: 'max.numeric',
                message: 'El valor no debe ser mayor de :value.'
            },
            {
                key: 'max.file',
                message: 'El tamaño del archivo no debe ser mayor a value.'
            },
            {
                key: 'max.string',
                message: 'El texto no debe ser mayor a :value caracteres.'
            },
            {
                key: 'max.array',
                message: 'El contenido no debe tener más de :value elementos.'
            },
            {
                key: 'mimes',
                message: 'Debe ser un archivo de tipo: :value.'
            },
            {
                key: 'mimetypes',
                message: 'Debe ser un archivo de tipo: :values.'
            },
            {
                key: 'min.numeric',
                message: 'El valor debe ser al menos de :value.'
            },
            {
                key: 'min.file',
                message: 'El tamaño del archivo debe ser al menos de :value.'
            },
            {
                key: 'min.string',
                message: 'El texto debe ser al menos de :value'
            },
            {
                key: 'min.array',
                message: 'El contenido debe tener al menos :value'
            },
            {
                key: 'not_in',
                message: 'El valor seleccionado es inválido.'
            },
            {
                key: 'not_regex',
                message: 'Este formato es inválido.'
            },
            {
                key: 'numeric',
                message: 'Debe ser un número.'
            },
            {
                key: 'password',
                message: 'La contraseña es incorrecta.'
            },
            {
                key: 'present',
                message: 'Este campo debe estar presente.'
            },
            {
                key: 'regex',
                message: 'Este formato es inválido.'
            },
            {
                key: 'required',
                message: 'Este campo es requerido.'
            },
            {
                key: 'required_if',
                message: 'Este campo es requerido cuando :field es :value.'
            },
            {
                key: 'required_unless',
                message: 'Este campo es requerido a menos que :field esté en :value.'
            },
            {
                key: 'required_with',
                message: 'Este campo es requerido cuando :values está presente.'
            },
            {
                key: 'required_with_all',
                message: 'Este campo es requerido cuando :value están presentes.'
            },
            {
                key: 'required_without',
                message: 'Este campo es requerido cuando :value no está presente.'
            },
            {
                key: 'required_without_all',
                message: 'Este campo es requerido cuando ninguno de :value.'
            },
            {
                key: 'same',
                message: 'El valor de este campo debe ser igual a :field.'
            },
            {
                key: 'size.numeric',
                message: 'El valor debe ser :value.'
            },
            {
                key: 'size.file',
                message: 'El tamaño del archivo debe ser de :value'
            },
            {
                key: 'size.string',
                message: 'El texto debe ser de :value caracteres.'
            },
            {
                key: 'size.array',
                message: 'El contenido debe tener :value elementos.'
            },
            {
                key: 'starts_with',
                message: 'Debe comenzar con :value'
            },
            {
                key: 'string',
                message: 'Debe ser un texto.'
            },
            {
                key: 'timezone',
                message: 'Debe ser de una zona horaria válida.'
            },
            {
                key: 'unique',
                message: 'Este campo ya ha sido tomado.'
            },
            {
                key: 'uploaded',
                message: 'Falló al subir.'
            },
            {
                key: 'url',
                message: 'Este formato es inválido'
            },
            {
                key: 'uuid',
                message: 'Debe ser un UUID válido.'
            }
        ]
    }),
    mutations: {
    },
    actions: {
    },
    getters: {
        rule: state => (key, value, field) => {
            var message = _.find(state.messages, (message) => {
                return message.key === key;
            });

            if (!message)
                return 'Validation not Found';

            message = message.message;
            if (value)
                message = message.replace(':value', value);

            if (field)
                message = message.replace(':field', field);

            return message;

        }
    }
};

