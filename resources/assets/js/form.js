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
        this.errors.clear();
    }
    /**
     * Выборка всех полей из формы
     * @return Object
     */
    data(){
        let data = {};
        for( let property in this.originalData ){
            data[property] = this[property];
        }
        return data;
    }

    post(url){
        return this.submit('post', url);
    }

    delete(url){
        return this.submit('delete', url);
    }

    submit(requestType, url){
        return new Promise( ( resolve, reject) =>{
            axios[requestType.toLowerCase()](url, this.data())
            .then( response => {
                this.onSuccess( response.data );
                resolve( response.data );
            })
            .catch( error => {
                this.onFail( error.response.data );
                reject( error.response.data );
            });
        })
    }

    onSuccess( data ){
        this.reset();
    }

    onFail( error ){
        this.errors.record( error )
    }
}

/**
 * Form errors class
 * @type {Object}
 */
class Errors {
    constructor(){
        this.errors = {};
    }

    get( field ){
        if( this.errors[ field ] ){
            return this.errors[ field ][0];
        }
    }

    record( error ){
        this.errors = error;
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
