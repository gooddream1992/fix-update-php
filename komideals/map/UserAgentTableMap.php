<?php



/**
 * This class defines the structure of the 'user_agent' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.komideals.map
 */
class UserAgentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.UserAgentTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('user_agent');
		$this->setPhpName('UserAgent');
		$this->setClassname('UserAgent');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('USER_AGENT', 'UserAgent', 'VARCHAR', true, 256, null);
		$this->addColumn('PARENT', 'Parent', 'VARCHAR', true, 16, null);
		$this->addColumn('PLATFORM', 'Platform', 'VARCHAR', true, 16, null);
		$this->addColumn('WIN32', 'Win32', 'TINYINT', true, 3, null);
		$this->addColumn('BROWSER', 'Browser', 'VARCHAR', true, 16, null);
		$this->addColumn('VERSION', 'Version', 'FLOAT', true, null, null);
		$this->addColumn('MAJORVER', 'Majorver', 'TINYINT', true, 3, null);
		$this->addColumn('MINORVER', 'Minorver', 'TINYINT', true, 3, null);
		$this->addColumn('FRAMES', 'Frames', 'TINYINT', true, 3, null);
		$this->addColumn('IFRAMES', 'Iframes', 'TINYINT', true, 3, null);
		$this->addColumn('TABLES', 'Tables', 'TINYINT', true, 3, null);
		$this->addColumn('COOKIES', 'Cookies', 'TINYINT', true, 3, null);
		$this->addColumn('JAVAAPPLETS', 'Javaapplets', 'TINYINT', true, 3, null);
		$this->addColumn('JAVASCRIPT', 'Javascript', 'TINYINT', true, 3, null);
		$this->addColumn('CSSVERSION', 'Cssversion', 'TINYINT', true, 3, null);
		$this->addColumn('SUPPORTSCSS', 'Supportscss', 'TINYINT', true, 3, null);
		$this->addColumn('ALPHA', 'Alpha', 'TINYINT', true, 3, null);
		$this->addColumn('BETA', 'Beta', 'TINYINT', true, 3, null);
		$this->addColumn('WIN16', 'Win16', 'TINYINT', true, 3, null);
		$this->addColumn('WIN64', 'Win64', 'TINYINT', true, 3, null);
		$this->addColumn('BACKGROUNDSOUNDS', 'Backgroundsounds', 'TINYINT', true, 3, null);
		$this->addColumn('CDF', 'Cdf', 'TINYINT', true, 3, null);
		$this->addColumn('VBSCRIPT', 'Vbscript', 'TINYINT', true, 3, null);
		$this->addColumn('ACTIVEXCONTROLS', 'Activexcontrols', 'TINYINT', true, 3, null);
		$this->addColumn('ISBANNED', 'Isbanned', 'TINYINT', true, 3, null);
		$this->addColumn('ISMOBILEDEVICE', 'Ismobiledevice', 'TINYINT', true, 3, null);
		$this->addColumn('ISSYNDICATIONREADER', 'Issyndicationreader', 'TINYINT', true, 3, null);
		$this->addColumn('CRAWLER', 'Crawler', 'TINYINT', true, 3, null);
		$this->addColumn('AOL', 'Aol', 'TINYINT', true, 3, null);
		$this->addColumn('AOLVERSION', 'Aolversion', 'TINYINT', true, 3, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DealFeedClick', 'DealFeedClick', RelationMap::ONE_TO_MANY, array('id' => 'user_agent_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedView', 'DealFeedView', RelationMap::ONE_TO_MANY, array('id' => 'user_agent_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // UserAgentTableMap
