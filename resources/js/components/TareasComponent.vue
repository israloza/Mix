<template>
    <div>

        <form @submit.prevent="editarNota(nota)" v-if="editarActivo">
            <h3>Editar Tareas</h3>
            <input type="text" placeholder="Nombre" class="form-control mb-2" v-model="nota.nombre">
            <input type="text" placeholder="Descripción" class="form-control mb-2" v-model="nota.descripcion">
            <button class="btn btn-success" type="submit">Guardar</button>
            <button class="btn btn-danger" type="submit" @click="cancelarEdicion()">Cancelar</button>
        </form>

        <form @submit.prevent="agregar" v-else>
            <h3>Agregar Tareas</h3>
            <input type="text" placeholder="Nombre" class="form-control mb-2" v-model="nota.nombre">
            <input type="text" placeholder="Descripción" class="form-control mb-2" v-model="nota.descripcion">
            <button class="btn btn-primary" type="submit">Agregar</button>
        </form>

        <hr class="mt-3">
        <h3>Listado de Notas</h3>
        <ul class="list-group my-3">
            <li class="list-group-item" v-for="(item,index) in notas" :key="index">
                <span class="badge badge-primary float-right">
            {{item.updated_at}}
                </span>
                <p>{{item.nombre}}</p>
                <p>{{item.descripcion}}</p>
                <button class="btn btn-danger btn-sm" @click="eliminarNota(item, index)">Eliminar</button>
                <button class="btn btn-warning btn-sm" @click="editarFormulario(item)">Editar</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                notas: [],
                nota: {nombre: '', descripcion: ''},
                editarActivo: false
            }
        },
        created() {
            axios.get('/notas')
                .then(res => {
                    this.notas = res.data;
                })
        },
        methods: {
            agregar() {
                if (this.nota.nombre.trim() === '' || this.nota.descripcion.trim() === '') {
                    alert('Debes completar todos los campos antes de guardar');
                    return;
                }
                //console.log(this.nota.nombre, this.nota.descripcion);
                const params = {
                    nombre: this.nota.nombre, descripcion: this.nota.descripcion
                };
                this.nota.nombre = '';
                this.nota.descripcion = '';

                axios.post('/notas', params)
                    .then(res => {
                        this.notas.push(res.data)
                    })
            },
            eliminarNota(item, index) {
                axios.delete(`/notas/${item.id}`)
                    .then(() => {
                        this.notas.splice(index, 1);
                    })
            },
            editarFormulario(item) {
                this.editarActivo = true;
                this.nota.nombre=item.nombre;
                this.nota.descripcion=item.descripcion;
                this.nota.id=item.id;
            },
            editarNota(item){

                const params={nombre:item.nombre,descripcion:item.descripcion};
                axios.put(`/notas/${item.id}`,params)
                    .then(res=>{
                        this.editarActivo=false;
                        const index=this.notas.findIndex(notabuscar=>notabuscar.id === res.data.id)
                        this.notas[index]=res.data;

                        this.nota= {nombre: '', descripcion: ''};

                        axios.get('/notas')
                            .then(res => {
                                this.notas = res.data;
                            })
                    })

            },
            cancelarEdicion(){
                this.editarActivo=false;
                this.nota={nombre: '', descripcion: ''};
            },
        }
    }
</script>

