
        $(document).ready(function() {
            $('#origin-province').on('change', function() {
                $("#origin-city").empty();

                let origin_province = this.value;
                    $.ajax({
                        url: "http://localhost:8080/api/city/" + origin_province,
                        type: "GET",
                        dataType: "JSON",
                    data: {
                        get_param: 'value'
                    },
                    cache: false,
                    success: function(result){
                        let json = result.rajaongkir.results;
                        for(let i = 0;i < json.length-1; i++){
                            $('#origin-city').append("<option value='"+json[i].city_id+"'>"+ json[i].city_name +" ("+ json[i].postal_code +")</option>");
                        }
                    }
                });
            });
            
        });
        $(document).ready(function() {
            $('#destination-province').on('change', function() {
            $("#destination-city").empty();

                let destination_province = this.value;
                    $.ajax({
                        url: "http://localhost:8080/api/city/" + destination_province,
                        type: "GET",
                        dataType: "JSON",
                    data: {
                        get_param: 'value'
                    },
                    cache: false,
                    success: function(result){
                        let json = result.rajaongkir.results;
                        for(let i = 0;i < json.length-1; i++){
                            $('#destination-city').append("<option value='"+json[i].city_id+"'>"+ json[i].city_name +" ("+ json[i].postal_code +")</option>");
                        }
                    }
                });
            });
        });
