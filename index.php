<?php
/**
 * @author: Viskov Sergey
 * @date: 3/2/16
 * @time: 4:34 PM
 */

use LTDBeget\sphinxConfigurator\serializers\PlainSerializer;
use LTDBeget\sphinxConfigurator\SphinxConfiguration;

require 'vendor/autoload.php';

$value = "test";

$config = new SphinxConfiguration();

$source = $config->addSource("source1");
$source->getOptionAppender()->addType($value);
$source->getOptionAppender()->addSqlHost($value);
$source->getOptionAppender()->addSqlUser($value);
$source->getOptionAppender()->addSqlPass($value);
$source->getOptionAppender()->addSqlDb($value);
$source->getOptionAppender()->addSqlSock($value);
$source->getOptionAppender()->addMysqlConnectFlags($value);
$source->getOptionAppender()->addMysqlSslCert($value);
$source->getOptionAppender()->addMysqlSslKey($value);
$source->getOptionAppender()->addMysqlSslCa($value);
$source->getOptionAppender()->addMssqlWinauth($value);
$source->getOptionAppender()->addOdbcDsn($value);
$source->getOptionAppender()->addSqlQuery($value);
$source->getOptionAppender()->addSqlColumnBuffers($value);
$source->getOptionAppender()->addSqlQueryPre($value);
$source->getOptionAppender()->addSqlJoinedField($value);
$source->getOptionAppender()->addSqlFileField($value);
$source->getOptionAppender()->addSqlQueryRange($value);
$source->getOptionAppender()->addSqlRangeStep($value);
$source->getOptionAppender()->addSqlAttrUint($value);
$source->getOptionAppender()->addSqlAttrBool($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrBigint($value);
$source->getOptionAppender()->addSqlAttrTimestamp($value);
$source->getOptionAppender()->addSqlAttrFloat($value);
$source->getOptionAppender()->addSqlAttrMulti($value);
$source->getOptionAppender()->addSqlAttrString($value);
$source->getOptionAppender()->addSqlAttrJson($value);
$source->getOptionAppender()->addSqlFieldString($value);
$source->getOptionAppender()->addSqlQueryPost($value);
$source->getOptionAppender()->addSqlQueryPostIndex($value);
$source->getOptionAppender()->addSqlRangedThrottle($value);
$source->getOptionAppender()->addSqlQueryKilllist($value);
$source->getOptionAppender()->addUnpackZlib($value);
$source->getOptionAppender()->addUnpackMysqlcompress($value);
$source->getOptionAppender()->addUnpackMysqlcompressMaxsize($value);
$source->getOptionAppender()->addHookConnect($value);
$source->getOptionAppender()->addHookQueryRange($value);
$source->getOptionAppender()->addHookPostIndex($value);
$source->getOptionAppender()->addXmlpipeCommand($value);
$source->getOptionAppender()->addXmlpipeField($value);
$source->getOptionAppender()->addXmlpipeAttrTimestamp($value);
$source->getOptionAppender()->addXmlpipeAttrUint($value);
$source->getOptionAppender()->addXmlpipeAttrBool($value);
$source->getOptionAppender()->addXmlpipeAttrFloat($value);
$source->getOptionAppender()->addXmlpipeAttrBigint($value);
$source->getOptionAppender()->addXmlpipeAttrMulti($value);
$source->getOptionAppender()->addXmlpipeAttrMulti64($value);
$source->getOptionAppender()->addXmlpipeAttrString($value);
$source->getOptionAppender()->addXmlpipeAttrJson($value);
$source->getOptionAppender()->addXmlpipeFieldString($value);
$source->getOptionAppender()->addXmlpipeFixupUtf8($value);


$index = $config->addIndex("index1");
$index->getOptionAppender()->addSource("source1");
$index->getOptionAppender()->addType($value);
$index->getOptionAppender()->addPath($value);
$index->getOptionAppender()->addDocinfo($value);
$index->getOptionAppender()->addDict($value);
$index->getOptionAppender()->addMlock($value);
$index->getOptionAppender()->addMorphology($value);
$index->getOptionAppender()->addMinStemmingLen($value);
$index->getOptionAppender()->addStopwords($value);
$index->getOptionAppender()->addWordforms($value);
$index->getOptionAppender()->addExceptions($value);
$index->getOptionAppender()->addEmbeddedLimit($value);
$index->getOptionAppender()->addMinWordLen($value);
$index->getOptionAppender()->addIgnoreChars($value);
$index->getOptionAppender()->addMinPrefixLen($value);
$index->getOptionAppender()->addMinInfixLen($value);
$index->getOptionAppender()->addMaxSubstringLen($value);
$index->getOptionAppender()->addPrefixFields($value);
$index->getOptionAppender()->addInfixFields($value);
$index->getOptionAppender()->addExpandKeywords($value);
$index->getOptionAppender()->addNgramLen($value);
$index->getOptionAppender()->addNgramChars($value);
$index->getOptionAppender()->addPhraseBoundary($value);
$index->getOptionAppender()->addPhraseBoundaryStep($value);
$index->getOptionAppender()->addBlendChars($value);
$index->getOptionAppender()->addBlendMode($value);
$index->getOptionAppender()->addHtmlStrip($value);
$index->getOptionAppender()->addHtmlIndexAttrs($value);
$index->getOptionAppender()->addHtmlRemoveElements($value);
$index->getOptionAppender()->addPreopen($value);
$index->getOptionAppender()->addInplaceEnable($value);
$index->getOptionAppender()->addInplaceHitGap($value);
$index->getOptionAppender()->addInplaceDocinfoGap($value);
$index->getOptionAppender()->addInplaceRelocFactor($value);
$index->getOptionAppender()->addInplaceWriteFactor($value);
$index->getOptionAppender()->addIndexExactWords($value);
$index->getOptionAppender()->addOvershortStep($value);
$index->getOptionAppender()->addStopwordStep($value);
$index->getOptionAppender()->addHitlessWords($value);
$index->getOptionAppender()->addIndexSp($value);
$index->getOptionAppender()->addIndexZones($value);
$index->getOptionAppender()->addIndexFieldLengths($value);
$index->getOptionAppender()->addRegexpFilter($value);
$index->getOptionAppender()->addBigramFreqWords($value);
$index->getOptionAppender()->addBigramIndex($value);
$index->getOptionAppender()->addSnippetsFilePrefix($value);
$index->getOptionAppender()->addStopwordsUnstemmed($value);
$index->getOptionAppender()->addGlobalIdf($value);
$index->getOptionAppender()->addAgent($value);
$index->getOptionAppender()->addAgentBlackhole($value);
$index->getOptionAppender()->addAgentPersistent($value);
$index->getOptionAppender()->addAgentConnectTimeout($value);
$index->getOptionAppender()->addAgentQueryTimeout($value);
$index->getOptionAppender()->addHaStrategy($value);
$index->getOptionAppender()->addRlpContext($value);
$index->getOptionAppender()->addRtMemLimit($value);
$index->getOptionAppender()->addRtField($value);
$index->getOptionAppender()->addRtAttrUint($value);
$index->getOptionAppender()->addRtAttrBigint($value);
$index->getOptionAppender()->addRtAttrFloat($value);
$index->getOptionAppender()->addRtAttrTimestamp($value);
$index->getOptionAppender()->addRtAttrString($value);
$index->getOptionAppender()->addRtAttrMulti($value);
$index->getOptionAppender()->addRtAttrMulti64($value);
$index->getOptionAppender()->addRtAttrJson($value);

$config->getSearchd()->getOptionAppender()->addListen("9000");
$config->getSearchd()->getOptionAppender()->addListen("1000");
$config->getSearchd()->getOptionAppender()->addListen("1233");
$config->getSearchd()->getOptionAppender()->addListen("3035");
$config->getSearchd()->getOptionAppender()->addAttrFlushPeriod($value);
$config->getSearchd()->getOptionAppender()->addBinlogFlush($value);
$config->getSearchd()->getOptionAppender()->addBinlogMaxLogSize($value);
$config->getSearchd()->getOptionAppender()->addBinlogPath($value);
$config->getSearchd()->getOptionAppender()->addClientTimeout($value);
$config->getSearchd()->getOptionAppender()->addCollationLibcLocale($value);
$config->getSearchd()->getOptionAppender()->addCollationServer($value);
$config->getSearchd()->getOptionAppender()->addDistThreads($value);
$config->getSearchd()->getOptionAppender()->addExpansionLimit($value);
$config->getSearchd()->getOptionAppender()->addHaPeriodKarma($value);
$config->getSearchd()->getOptionAppender()->addHaPingInterval($value);
$config->getSearchd()->getOptionAppender()->addListen($value);
$config->getSearchd()->getOptionAppender()->addListenBacklog($value);
$config->getSearchd()->getOptionAppender()->addLog($value);
$config->getSearchd()->getOptionAppender()->addMaxBatchQueries($value);
$config->getSearchd()->getOptionAppender()->addMaxChildren($value);
$config->getSearchd()->getOptionAppender()->addMaxFilters($value);
$config->getSearchd()->getOptionAppender()->addMaxFilterValues($value);
$config->getSearchd()->getOptionAppender()->addMaxPacketSize($value);
$config->getSearchd()->getOptionAppender()->addMvaUpdatesPool($value);
$config->getSearchd()->getOptionAppender()->addMysqlVersionString($value);
$config->getSearchd()->getOptionAppender()->addPersistentConnectionsLimit($value);
$config->getSearchd()->getOptionAppender()->addPidFile($value);
$config->getSearchd()->getOptionAppender()->addPredictedTimeCosts($value);
$config->getSearchd()->getOptionAppender()->addPreforkRotationThrottle($value);
$config->getSearchd()->getOptionAppender()->addPreopenIndexes($value);
$config->getSearchd()->getOptionAppender()->addQueryLog($value);
$config->getSearchd()->getOptionAppender()->addQueryLogFormat($value);
$config->getSearchd()->getOptionAppender()->addReadBuffer($value);
$config->getSearchd()->getOptionAppender()->addReadTimeout($value);
$config->getSearchd()->getOptionAppender()->addReadUnhinted($value);
$config->getSearchd()->getOptionAppender()->addRtFlushPeriod($value);
$config->getSearchd()->getOptionAppender()->addRtMergeIops($value);
$config->getSearchd()->getOptionAppender()->addRtMergeMaxiosize($value);
$config->getSearchd()->getOptionAppender()->addSeamlessRotate($value);
$config->getSearchd()->getOptionAppender()->addSnippetsFilePrefix($value);
$config->getSearchd()->getOptionAppender()->addSphinxqlState($value);
$config->getSearchd()->getOptionAppender()->addSubtreeDocsCache($value);
$config->getSearchd()->getOptionAppender()->addSubtreeHitsCache($value);
$config->getSearchd()->getOptionAppender()->addThreadStack($value);
$config->getSearchd()->getOptionAppender()->addUnlinkOld($value);
$config->getSearchd()->getOptionAppender()->addWatchdog($value);
$config->getSearchd()->getOptionAppender()->addWorkers($value);

$config->getIndexer()->getOptionAppender()->addLemmatizerCache($value);
$config->getIndexer()->getOptionAppender()->addMaxFileFieldBuffer($value);
$config->getIndexer()->getOptionAppender()->addMaxIops($value);
$config->getIndexer()->getOptionAppender()->addMaxIosize($value);
$config->getIndexer()->getOptionAppender()->addMaxXmlpipe2Field($value);
$config->getIndexer()->getOptionAppender()->addMemLimit($value);
$config->getIndexer()->getOptionAppender()->addOnFileFieldError($value);
$config->getIndexer()->getOptionAppender()->addWriteBuffer($value);

$config->getCommon()->getOptionAppender()->addJsonAutoconvKeynames($value);
$config->getCommon()->getOptionAppender()->addJsonAutoconvNumbers($value);
$config->getCommon()->getOptionAppender()->addLemmatizerBase($value);
$config->getCommon()->getOptionAppender()->addOnJsonAttrError($value);
$config->getCommon()->getOptionAppender()->addPluginDir($value);
$config->getCommon()->getOptionAppender()->addRlpEnvironment($value);
$config->getCommon()->getOptionAppender()->addRlpMaxBatchDocs($value);
$config->getCommon()->getOptionAppender()->addRlpMaxBatchSize($value);
$config->getCommon()->getOptionAppender()->addRlpRoot($value);

echo PlainSerializer::serialize($config);
