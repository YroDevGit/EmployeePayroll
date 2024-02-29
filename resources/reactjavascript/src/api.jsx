const FetchData = async ({apiKey, setData}) => {
    var loading = true;
    var getError = null;
    
    try {
        const response = await fetch(apiKey);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const jsonData = await response.json();
        setData(jsonData);
   
        
    } catch (error) {
     getError = error.message;
    }
    loading = false;


    if (loading) {
         console.clear();
         console.error(loading);
    }

    if (getError) {
        console.clear();
        console.error(getError);
    }
};

export default FetchData;