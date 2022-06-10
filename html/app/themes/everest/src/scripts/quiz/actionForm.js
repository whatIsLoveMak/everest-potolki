class actionForm
{
    constructor(form) {
        this._form = form
        this._data = this.serializeFormData(form)
        this._originData = new FormData(form)
    }

    serializeFormData(form)
    {
        const formData = new FormData(form);
        const serialized = {};
        formData.forEach((v, k) => {
            if (serialized[k]) {
                let ram = serialized[k]
                if (!Array.isArray(serialized[k])) {
                    serialized[k] = []
                    serialized[k].push(ram)
                }
                serialized[k].push(v)
            } else {
                serialized[k] = v;
            }
        });
        return serialized;
    }

    get data(){
        return this._originData
    }

    get serializeData(){
        return this._data
    }

    get form(){
        return this._form
    }

    getData() {
        return this._originData
    }

    getSerializeData() {
        return this._data
    }
}

export default actionForm;