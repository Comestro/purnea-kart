import React, { useEffect, useState } from 'react'
import { fetchProducts } from '../../services/apiService'

function Products() {
    const [products, setProducts] = useState([]);
    const [loading,setLoading]= useState('null');
    const [error,setError] = useState(false)

    useEffect (()=>{
        const loadProducts = async ()=>{
            try{
                const product =  await fetchProducts();
                setProducts(product.products);
                setLoading(false)
    
            }catch(error){
                setError(error)
                setLoading(false)
            }
        }
        loadProducts();
    },[]) 

    if (loading) return <div>Loading...</div>;
    if (error) return <div>Error:{error}</div>;


  return (
    
        <div className='h-88 bg-white mt-3 mx-3 px-5 py-5'>
        <h4 className='font-semibold fon'>Best of electronic</h4>
            <div className='flex items-center space-x-6'>
                {products.map((product)=>(
                    <div className='bg-slate-100 fl w-52 h-64 p-4 mt-5 rounded-lg border border-black' key={product.id}>
                        <img  src='purnea-kart/purnea-kart-frontend/public/assets/coffee_images.jpeg'></img>
                        <h4 className='text-sm text-gray-800 pl-12 pt-3'>{product.sku}</h4>
                    </div>
                ))}
            </div> 
        </div>
        
    
  )
}

export default Products