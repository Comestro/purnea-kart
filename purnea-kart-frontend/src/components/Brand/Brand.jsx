import React, { useEffect, useState } from 'react'
import { fetchBrands } from '../../services/apiService'

function Brand() {
   const [brand, setBrand] = useState([])
   const [error, setError] = useState(false)
   const [loading, setLoading] = useState('null')

   useEffect(()=>{
    const loadBrand = async ()=>{
        try{
         const data = await fetchBrands();
         setBrand(data.brands);
        }
        catch(error){
           setError(error.message);
         }
         setLoading(false);
    }
    loadBrand();
   },[])

   if (loading) return <p>Loading...</p>;
   if (error) return <p>Error: {error}</p>;

   return (
    <div className='h-16 bg-white mt-3 mx-3'>
      {brand.map((brand)=>{return(
         <div key={brand.id}>
          <img src='/public/assets/puma.jpg'
          className='w-16'></img>
         {/* <img src={brand.logo}></img>
         <h3>{brand.brand_name}</h3> */}
      </div>
      )}
         
      )}
    </div>
     
  )
}

export default Brand