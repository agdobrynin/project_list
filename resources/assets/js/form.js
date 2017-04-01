/**
 * Форма
 * @type {[type]}
 */
export class Form {
    constructor(data){
        this.originalData = data;
        for(let field in data){
            this[field] = data[field];
        }
        this.errors = new Errors();
    }

    reset(){
        for(let field in this.originalData){
            this[field] = '';
        }
    }

    data(){
        let data = Object.assign({}, this);
        delete data.originalData;
        delete data.errors;

        return data;
    }

    submit(requestType, url){
         axios[requestType.toLowerCase()](url, this.data())
         .then( this.onSuccess.bind(this) )
         .catch( this.onFail.bind(this) );
    }

    onSuccess( responce ){
        alert( responce.data.message )
        this.errors.clear();
        this.reset();
    }

    onFail( error ){
        this.errors.record( error.response.data )
    }
}

/**
 * Form errors class
 * @type {Object}
 */
export class Errors {
    constructor(){
        this.errors = {}
    }

    get( field ){
        if( this.errors[ field ] ){
            return this.errors[ field ][0];
        }
    }

    record( errors ){
        this.errors = errors;
    }

    clear( field ){
        if( field ){
            delete this.errors[ field ];
        } else {
            this.errors = {};
        }
    }

    has( field ){
        return this.errors.hasOwnProperty( field );
    }

    any(){
        return Object.keys( this.errors ).length > 0;
    }
}
