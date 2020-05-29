<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:33:11+00:00 
 */
namespace Office365\Graph;



use Office365\Runtime\DeleteEntityQuery;
use Office365\Runtime\Http\HttpMethod;
use Office365\Runtime\Http\RequestOptions;
use Office365\Runtime\InvokeMethodQuery;
use Office365\Runtime\InvokePostMethodQuery;
use Office365\Runtime\ResourcePath;
use Office365\Runtime\ResourcePathUrl;

/**
 *  Item is the main data model in the OneDrive API. Everything is an item.
 */
class DriveItem extends BaseItem
{

    /**
     * The simple upload API allows you to provide the contents of a new file or update the contents of an
     * existing file in a single API call. This method only supports files up to 4MB in size.
     * @param string $name
     * @param string $content
     * @return DriveItem
     */
    public function upload($name, $content)
    {
        $driveItem = new DriveItem($this->getContext(), new ResourcePathUrl($name,$this->resourcePath));
        $qry = new InvokePostMethodQuery($driveItem, null,null,null,$content);
        $this->getContext()->addQueryAndResultObject($qry,$driveItem);
        $this->getContext()->getPendingRequest()->beforeExecuteQuery(function (RequestOptions $request){
            $request->Url .= "content";
            $request->Method = HttpMethod::Put;
        },true);
        return $driveItem;
    }


    /**
     * Download the contents of the primary stream (file) of a DriveItem. Only driveItems with the file property
     * can be downloaded.
     * @param resource $handle
     */
    public function download($handle){
        $qry = new InvokeMethodQuery($this);
        $this->getContext()->getPendingRequest()->beforeExecuteQuery(function (RequestOptions $request) use ($handle){
            $request->Url .= "content";
            $request->StreamHandle = $handle;
            $request->FollowLocation = true;
        },true);
        $this->getContext()->addQuery($qry);
    }


    /**
     * Converts the contents of an item in a specific format
     * @param resource $handle
     * @param string $format
     */
    public function convert($handle, $format)
    {
        $qry = new InvokeMethodQuery($this);
        $this->getContext()->getPendingRequest()->beforeExecuteQuery(function (RequestOptions $request) use ($handle,$format){
            $request->Url .= "content?\$format=$format";
            $request->StreamHandle = $handle;
            $request->FollowLocation = true;
        },true);
        $this->getContext()->addQuery($qry);
    }

    /**
     * Delete a DriveItem by using its ID or path. Note that deleting items using this method will move the items to
     * the recycle bin instead of permanently deleting the item.
     */
    public function delete()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }


    /**
     * @return string
     */
    public function getCTag()
    {
        if (!$this->isPropertyAvailable("CTag")) {
            return null;
        }
        return $this->getProperty("CTag");
    }
    /**
     * @var string
     */
    public function setCTag($value)
    {
        $this->setProperty("CTag", $value, true);
    }
    /**
     * @return GeoCoordinates
     */
    public function getLocation()
    {
        if (!$this->isPropertyAvailable("Location")) {
            return null;
        }
        return $this->getProperty("Location");
    }
    /**
     * @var GeoCoordinates
     */
    public function setLocation($value)
    {
        $this->setProperty("Location", $value, true);
    }
    /**
     * @return integer
     */
    public function getSize()
    {
        if (!$this->isPropertyAvailable("Size")) {
            return null;
        }
        return $this->getProperty("Size");
    }
    /**
     * @var integer
     */
    public function setSize($value)
    {
        $this->setProperty("Size", $value, true);
    }
    /**
     * @return string
     */
    public function getWebDavUrl()
    {
        if (!$this->isPropertyAvailable("WebDavUrl")) {
            return null;
        }
        return $this->getProperty("WebDavUrl");
    }
    /**
     * @var string
     */
    public function setWebDavUrl($value)
    {
        $this->setProperty("WebDavUrl", $value, true);
    }
    /**
     * @return Audio
     */
    public function getAudio()
    {
        if (!$this->isPropertyAvailable("Audio")) {
            return null;
        }
        return $this->getProperty("Audio");
    }
    /**
     * @var Audio
     */
    public function setAudio($value)
    {
        $this->setProperty("Audio", $value, true);
    }
    /**
     * @return Deleted
     */
    public function getDeleted()
    {
        if (!$this->isPropertyAvailable("Deleted")) {
            return null;
        }
        return $this->getProperty("Deleted");
    }
    /**
     * @var Deleted
     */
    public function setDeleted($value)
    {
        $this->setProperty("Deleted", $value, true);
    }
    /**
     * @return File
     */
    public function getFile()
    {
        if (!$this->isPropertyAvailable("File")) {
            return null;
        }
        return $this->getProperty("File");
    }
    /**
     * @var File
     */
    public function setFile($value)
    {
        $this->setProperty("File", $value, true);
    }
    /**
     * @return FileSystemInfo
     */
    public function getFileSystemInfo()
    {
        if (!$this->isPropertyAvailable("FileSystemInfo")) {
            return null;
        }
        return $this->getProperty("FileSystemInfo");
    }
    /**
     * @var FileSystemInfo
     */
    public function setFileSystemInfo($value)
    {
        $this->setProperty("FileSystemInfo", $value, true);
    }
    /**
     * @return Folder
     */
    public function getFolder()
    {
        if (!$this->isPropertyAvailable("Folder")) {
            return null;
        }
        return $this->getProperty("Folder");
    }
    /**
     * @var Folder
     */
    public function setFolder($value)
    {
        $this->setProperty("Folder", $value, true);
    }
    /**
     * @return Image
     */
    public function getImage()
    {
        if (!$this->isPropertyAvailable("Image")) {
            return null;
        }
        return $this->getProperty("Image");
    }
    /**
     * @var Image
     */
    public function setImage($value)
    {
        $this->setProperty("Image", $value, true);
    }
    /**
     * @return Package
     */
    public function getPackage()
    {
        if (!$this->isPropertyAvailable("Package")) {
            return null;
        }
        return $this->getProperty("Package");
    }
    /**
     * @var Package
     */
    public function setPackage($value)
    {
        $this->setProperty("Package", $value, true);
    }
    /**
     * @return Photo
     */
    public function getPhoto()
    {
        if (!$this->isPropertyAvailable("Photo")) {
            return null;
        }
        return $this->getProperty("Photo");
    }
    /**
     * @var Photo
     */
    public function setPhoto($value)
    {
        $this->setProperty("Photo", $value, true);
    }
    /**
     * @return PublicationFacet
     */
    public function getPublication()
    {
        if (!$this->isPropertyAvailable("Publication")) {
            return null;
        }
        return $this->getProperty("Publication");
    }
    /**
     * @var PublicationFacet
     */
    public function setPublication($value)
    {
        $this->setProperty("Publication", $value, true);
    }
    /**
     * @return RemoteItem
     */
    public function getRemoteItem()
    {
        if (!$this->isPropertyAvailable("RemoteItem")) {
            return null;
        }
        return $this->getProperty("RemoteItem");
    }
    /**
     * @var RemoteItem
     */
    public function setRemoteItem($value)
    {
        $this->setProperty("RemoteItem", $value, true);
    }
    /**
     * @return Root
     */
    public function getRoot()
    {
        if (!$this->isPropertyAvailable("Root")) {
            return null;
        }
        return $this->getProperty("Root");
    }
    /**
     * @var Root
     */
    public function setRoot($value)
    {
        $this->setProperty("Root", $value, true);
    }
    /**
     * @return SearchResult
     */
    public function getSearchResult()
    {
        if (!$this->isPropertyAvailable("SearchResult")) {
            return null;
        }
        return $this->getProperty("SearchResult");
    }
    /**
     * @var SearchResult
     */
    public function setSearchResult($value)
    {
        $this->setProperty("SearchResult", $value, true);
    }
    /**
     * @return Shared
     */
    public function getShared()
    {
        if (!$this->isPropertyAvailable("Shared")) {
            return null;
        }
        return $this->getProperty("Shared");
    }
    /**
     * @var Shared
     */
    public function setShared($value)
    {
        $this->setProperty("Shared", $value, true);
    }
    /**
     * @return SharepointIds
     */
    public function getSharepointIds()
    {
        if (!$this->isPropertyAvailable("SharepointIds")) {
            return null;
        }
        return $this->getProperty("SharepointIds");
    }
    /**
     * @var SharepointIds
     */
    public function setSharepointIds($value)
    {
        $this->setProperty("SharepointIds", $value, true);
    }
    /**
     * @return SpecialFolder
     */
    public function getSpecialFolder()
    {
        if (!$this->isPropertyAvailable("SpecialFolder")) {
            return null;
        }
        return $this->getProperty("SpecialFolder");
    }
    /**
     * @var SpecialFolder
     */
    public function setSpecialFolder($value)
    {
        $this->setProperty("SpecialFolder", $value, true);
    }
    /**
     * @return Video
     */
    public function getVideo()
    {
        if (!$this->isPropertyAvailable("Video")) {
            return null;
        }
        return $this->getProperty("Video");
    }
    /**
     * @var Video
     */
    public function setVideo($value)
    {
        $this->setProperty("Video", $value, true);
    }
    /**
     * @return Workbook
     */
    public function getWorkbook()
    {
        if (!$this->isPropertyAvailable("Workbook")) {
            $this->setProperty("Workbook", new Workbook($this->getContext(), new ResourcePath("Workbook", $this->getResourcePath())));
        }
        return $this->getProperty("Workbook");
    }
    /**
     * @return ItemAnalytics
     */
    public function getAnalytics()
    {
        if (!$this->isPropertyAvailable("Analytics")) {
            $this->setProperty("Analytics", new ItemAnalytics($this->getContext(), new ResourcePath("Analytics", $this->getResourcePath())));
        }
        return $this->getProperty("Analytics");
    }
    /**
     * @return ListItem
     */
    public function getListItem()
    {
        if (!$this->isPropertyAvailable("ListItem")) {
            $this->setProperty("ListItem", new ListItem($this->getContext(), new ResourcePath("ListItem", $this->getResourcePath())));
        }
        return $this->getProperty("ListItem");
    }
    /**
     * @return DriveItemCollection
     */
    public function getChildren()
    {
        if (!$this->isPropertyAvailable("Children")) {
            $this->setProperty("Children", new DriveItemCollection($this->getContext(), new ResourcePath("Children", $this->getResourcePath())));
        }
        return $this->getProperty("Children");
    }
    /**
     * @return PermissionCollection
     */
    public function getPermissions()
    {
        if (!$this->isPropertyAvailable("Permissions")) {
            $this->setProperty("Permissions", new PermissionCollection($this->getContext(), new ResourcePath("Permissions", $this->getResourcePath())));
        }
        return $this->getProperty("Permissions");
    }

    public function setProperty($name, $value, $persistChanges = true)
    {
        parent::setProperty($name, $value, $persistChanges);
        if($name == "id" && $this->resourcePath->getParent()->getSegment() == "Children"){
            $this->resourcePath = new ResourcePath($value,
                new ResourcePath("items", $this->parentCollection->getResourcePath()->getParent()->getParent()));
        }
    }



}