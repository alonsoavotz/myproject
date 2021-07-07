<template>
    <div>
        <form action="#" @submit.prevent="save" >
            <input type="text" v-model="task" required>
            <div>
                <button type="submit" >Agregar</button>
            </div>

        </form>
        
        <ul>
            <li v-for="task in tasks" :key="task.id">
                {{ task.name }}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return{
            task: '',
            tasks: []
        }
    },
    methods:{
        save(){
            console.log('saved');
             let ObjetoTask = {
                id: this.tasks.length + 1,
                name: this.task
            };

            axios.post('/tasks', ObjetoTask).then((resp) =>{
                console.log(resp.data);
                this.tasks.push(resp.data);
            }) 
           

            // this.tasks.push(ObjetoTask);
            // this.task = "";
        }
    }
}
</script>