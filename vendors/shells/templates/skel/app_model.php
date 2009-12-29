<?php
class AppModel extends Model 
{
    /**
     * Automatically replace a URL or Slug with a cleaned version of itself or a related field like a Title.
     * Place this in app/app_model.php
     *
     * Example:
     * $this->cleanUrl('slug', 'title');
     * where slug and title are your column names in your model
     * 
     * @param string   $urlField       Column name from your database that stores the cleaned slug.
     * @param string   $titleField     Column name from your database that stores the corresponding title.
     * @return boolean                 Always returns TRUE.
     */
    function cleanUrl($urlField, $titleField) 
    {
        if (empty($this->data[$this->name][$urlField]) && !empty($this->data[$this->name][$titleField])) 
        {
            $slug = $this->data[$this->name][$titleField];
        } 
        else 
        {
            $slug = $this->data[$this->name][$urlField];
        }

        $this->data[$this->name][$urlField] = strtolower(Inflector::slug($slug, '-'));

        return TRUE;
    }
    
}

?>