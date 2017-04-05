import Errors from './Errors.js';
/**
 * Форма
 * @type {[type]}
 */
class Form {
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
    /**
     * Получить значение поля
     * @param  string field Название поля
     * @return string значение
     */
    get(field){
        return this[field];
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

export default Form;
