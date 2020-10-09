<template> 
    <div class="flex items-center justify-center bg-blue-500 bg-opacity-25 w-screen h-screen xl:p-64 lg:p-32 md:p-16 p-8">
            <va-card class="bg-red-900 bg-opacity-100 w-full xl:h-full lg:h-full md:h-64 h-64">
                <div class="w-full h-full xl:py-24 lg:py-24 md:py-4 py-8">

                    <div class="xl:my-8 lg:my-8 md:mb-8 mb-8">
                        <h1 class="text-center xl:text-6xl lg:text-6xl md:text-2xl text-2xl">
                            Página no encontrada
                        </h1>

                    </div>
                    <div class="flex justify-center items-center h-full mt-4">
                        <img src="/assets/404.gif" class="xl:w-3/6 lg:w-3/6 md:w-2/6 w-2/6">

                    </div>
                    <div class="flex justify-center items-center h-full mt-4">
                        <va-button type="primary" iconBefore="arrow-left" size="lg">
                            Volver
                        </va-button>    
                    </div>
                </div>
                
            </va-card>
    </div>
</template>

<script>
export default {
    mounted() {
        
    }
}
</script>

<style>

</style>