<template>
    <div>
        <a
        class="p-2 bg-red-600 text-white hover:bg-red-900 rounded"
        @click="eliminarVacante"
        >Eliminar</a>
    </div>
</template>

<script>
export default {
    props: ['vacanteId'],

    methods: {
        eliminarVacante(){
            //console.log('Eliminando', this.vacanteId)

        this.$swal.fire({
            title: '¿Deseas eliminar esta Vacante?',
            text: "Un vez Eliminada no se podra Recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed){

                const params = {
                    id: this.vacanteId,
                    _method: 'delete'
                }
                //Enviar Peticion a Axios

                axios.post(`/vacantes/${this.vacanteId}`, params)
                    .then(respuesta => {
                        //console.log(respuesta)
                         this.$swal.fire(
                            'Vacante Eliminada!',
                             respuesta.data.mensaje,
                            'success'
                         )

                    // Eliminar del DOM

                    this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        })


        }
    },
}
</script>
