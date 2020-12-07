

@foreach($categories as $category)
        
    // echo out category title

    @foreach($category->subCategories as $subCategory)
    
        // echo out sub category title

            @foreach($subCategory->$items as $item)